<?php

namespace App\Filament\Admin\Resources\OtherDesigns\Pages;

use App\Filament\Admin\Resources\OtherDesigns\OtherDesignResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageOtherDesigns extends ManageRecords
{
    protected static string $resource = OtherDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
