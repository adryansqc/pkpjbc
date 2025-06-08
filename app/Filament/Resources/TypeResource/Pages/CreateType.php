<?php

namespace App\Filament\Resources\TypeResource\Pages;

use App\Filament\Resources\TypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateType extends CreateRecord
{
    protected static string $resource = TypeResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Buat Kode Ruko';
    }
}
