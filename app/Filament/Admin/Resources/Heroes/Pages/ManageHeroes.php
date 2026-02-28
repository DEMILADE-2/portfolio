<?php

namespace App\Filament\Admin\Resources\Heroes\Pages;

use App\Filament\Admin\Resources\Heroes\HeroResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageHeroes extends ManageRecords
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
