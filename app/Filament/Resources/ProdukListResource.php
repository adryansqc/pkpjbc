<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukListResource\Pages;
use App\Filament\Resources\ProdukListResource\RelationManagers;
use App\Models\ProdukList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdukListResource extends Resource
{
    protected static ?string $model = ProdukList::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options([
                        1 => 'Terjual',
                        0 => 'Ready'
                    ])
                    ->nullable(),
                Forms\Components\TextInput::make('kode_ruko')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('no_ruko')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('l_tanah')
                    ->label('Lebar Tanah')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('p_tanah')
                    ->label('Panjang Tanah')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('luas_tanah')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('type_bangunan')
                    ->label('Tipe Bangunan')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('l_bangunan')
                    ->label('Luas Bangunan')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('h_jual_exc_ppn')
                    ->label('Harga Jual (Exc. PPN)')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\TextInput::make('ppn')
                    ->label('PPN')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\TextInput::make('h_jual_inc_ppn')
                    ->label('Harga Jual (Inc. PPN)')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        1 => 'Terjual',
                        0 => 'Ready'
                    ])
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode_ruko')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_ruko')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('l_tanah')
                    ->label('Lebar Tanah')
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_tanah')
                    ->label('Panjang Tanah')
                    ->sortable(),
                Tables\Columns\TextColumn::make('luas_tanah')
                    ->label('Luas Tanah')
                    ->sortable(),
                Tables\Columns\TextColumn::make('type_bangunan')
                    ->label('Tipe Bangunan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('l_bangunan')
                    ->label('Luas Bangunan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('h_jual_exc_ppn')
                    ->label('Harga (Exc. PPN)')
                    ->money('idr')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ppn')
                    ->money('idr')
                    ->sortable(),
                Tables\Columns\TextColumn::make('h_jual_inc_ppn')
                    ->label('Harga (Inc. PPN)')
                    ->money('idr')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProdukLists::route('/'),
            'create' => Pages\CreateProdukList::route('/create'),
            'edit' => Pages\EditProdukList::route('/{record}/edit'),
        ];
    }
}
