<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(fn() => Auth::user()->id)
                    ->required()
                    ->dehydrated(),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                        if ($operation === 'create') {
                            $set('slug', Str::slug($state));
                        }
                    }),
                Forms\Components\DatePicker::make('tanggal')
                    ->required(),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->columnSpanFull()
                    ->required()
                    ->disk('public')
                    ->directory('berita')
                    ->deleteUploadedFileUsing(function ($file) {
                        Storage::disk('public')->delete($file);
                    })
                    ->afterStateUpdated(function ($record, $state) {
                        if ($record && $record->gambar && $state !== $record->gambar) {
                            Storage::disk('public')->delete($record->gambar);
                        }
                    }),
                TiptapEditor::make('isi')
                    // ->profile('simple')
                    ->required()
                    ->label('Isi Berita')
                    ->disk('public')
                    ->directory('isi')
                    // ->fileAttachmentsDisk('public')
                    // ->fileAttachmentsDirectory('isi')
                    ->afterStateUpdated(function ($record, $state) {
                        if ($record && $record->isi) {
                            preg_match_all('/src="([^"]+)"/', $record->isi, $oldMatches);
                            $oldAttachments = $oldMatches[1] ?? [];

                            preg_match_all('/src="([^"]+)"/', $state, $newMatches);
                            $newAttachments = $newMatches[1] ?? [];

                            $removedAttachments = array_diff($oldAttachments, $newAttachments);
                            foreach ($removedAttachments as $attachment) {
                                if (str_contains($attachment, 'isi/')) {
                                    $path = str_replace('/storage/', '', parse_url($attachment, PHP_URL_PATH));
                                    Storage::disk('public')->delete($path);
                                }
                            }
                        }
                    })
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        1 => 'Published',
                        0 => 'Draft'
                    ])
                    ->required()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('view')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('status')
                    ->label('Publis')
                    ->onColor('success')
                    ->offColor('danger'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (Berita $record) {
                        if ($record->gambar) {
                            Storage::disk('public')->delete($record->gambar);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function (Collection $records) {
                            foreach ($records as $record) {
                                if ($record->gambar) {
                                    Storage::disk('public')->delete($record->gambar);
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
