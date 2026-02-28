<?php

namespace App\Filament\Admin\Resources\EventFlyers\Pages;

use App\Filament\Admin\Resources\EventFlyers\EventFlyerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageEventFlyers extends ManageRecords
{
    protected static string $resource = EventFlyerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
