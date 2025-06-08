<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationGroup = 'Layanan';

    protected static ?string $navigationLabel = 'Type Ruko';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type_id')
                    ->label('Kode Ruko')
                    ->preload()
                    ->columnSpanFull()
                    ->required()
                    ->searchable()
                    ->relationship('type', 'nama')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Tipe')
                            ->required()
                            ->maxLength(255),
                    ]),
                Forms\Components\FileUpload::make('foto')
                    ->columnSpanFull()
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory('produk')
                    ->deleteUploadedFileUsing(function ($file) {
                        Storage::disk('public')->delete($file);
                    })
                    ->afterStateUpdated(function ($record, $state) {
                        if ($record && $record->foto && $state !== $record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\Select::make('status')
                    ->columnSpanFull()
                    ->label('Status Produk')
                    ->options([
                        1 => 'Terjual',
                        0 => 'Ready'
                    ])
                    ->required()
                    ->default(0),
                Forms\Components\Textarea::make('keterangan')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Select::make('unggulan')
                    ->columnSpanFull()
                    ->label('Jadikan Produk Unggulan')
                    ->options([
                        1 => 'Unggulan',
                        0 => 'Tidak'
                    ])
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->disk('public')
                    ->square(),
                Tables\Columns\TextColumn::make('type.nama')
                    ->label('Kode Ruko')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->money('idr')
                    ->sortable(),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        1 => 'Terjual',
                        0 => 'Ready'
                    ])
                    ->sortable(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\SelectColumn::make('unggulan')
                    ->options([
                        1 => 'Unggulan',
                        0 => 'Tidak'
                    ])
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (Produk $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function (Collection $records) {
                            foreach ($records as $record) {
                                if ($record->foto) {
                                    Storage::disk('public')->delete($record->foto);
                                }
                            }
                        }),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
