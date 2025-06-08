<?php

namespace App\Filament\Resources\ProdukListResource\Pages;

use App\Filament\Resources\ProdukListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdukList extends EditRecord
{
    protected static string $resource = ProdukListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
