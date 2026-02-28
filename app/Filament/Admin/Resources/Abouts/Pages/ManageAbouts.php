<?php

namespace App\Filament\Admin\Resources\Abouts\Pages;

use App\Filament\Admin\Resources\Abouts\AboutResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageAbouts extends ManageRecords
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
