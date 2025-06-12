<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigResource\Pages;
use App\Filament\Resources\ConfigResource\RelationManagers;
use App\Models\Config;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput; // Pastikan ini di-import
use Filament\Forms\Components\FileUpload; // Import FileUpload
use Filament\Forms\Components\Textarea; // Import Textarea

class ConfigResource extends Resource
{
    protected static ?string $model = Config::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationLabel = 'Setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Fieldset::make('Isi Data')
                    ->schema(function (\Filament\Forms\Get $get, \App\Models\Config $record = null) {
                        $type = $record ? $record->type : 'text';
                        $labelName = $record ? $record->name : 'Nilai'; // Default label jika record baru

                        switch ($type) {
                            case 'number':
                                return [
                                    TextInput::make('value')
                                        ->label($labelName)
                                        ->required()
                                        ->numeric()
                                        ->columnSpanFull()
                                        ->maxLength(255),
                                ];
                            case 'file':
                                return [
                                    FileUpload::make('value')
                                        ->label($labelName)
                                        ->required()
                                        ->columnSpanFull()
                                        ->image()
                                        ->directory('setting')
                                        ->visibility('public'),
                                ];
                            case 'textarea':
                                return [
                                    Textarea::make('value')
                                        ->label($labelName)
                                        ->required()
                                        ->columnSpanFull()
                                        ->maxLength(65535)
                                        ->rows(5),
                                ];
                            case 'url':
                                return [
                                    TextInput::make('value')
                                        ->label($labelName)
                                        ->required()
                                        ->columnSpanFull()
                                        ->url()
                                        ->maxLength(255),
                                ];
                            case 'email':
                                return [
                                    TextInput::make('value')
                                        ->label($labelName)
                                        ->required()
                                        ->columnSpanFull()
                                        ->email()
                                        ->maxLength(255),
                                ];
                            case 'text':
                            default:
                                return [
                                    TextInput::make('value')
                                        ->label($labelName) // Menggunakan nama sebagai label
                                        ->required()
                                        ->columnSpanFull()
                                        ->maxLength(255),
                                ];
                        }
                    })->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('value')
                    ->label('Nilai')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'text' => 'info',
                        'number' => 'success',
                        default => 'gray',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->modalHeading('Edit Konfigurasi')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batal'),
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
            'index' => Pages\ListConfigs::route('/'),
            // Hapus route edit karena sudah menggunakan modal
        ];
    }
}
