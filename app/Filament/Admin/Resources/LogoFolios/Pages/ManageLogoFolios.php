<?php

namespace App\Filament\Admin\Resources\LogoFolios\Pages;

use App\Filament\Admin\Resources\LogoFolios\LogoFolioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageLogoFolios extends ManageRecords
{
    protected static string $resource = LogoFolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
