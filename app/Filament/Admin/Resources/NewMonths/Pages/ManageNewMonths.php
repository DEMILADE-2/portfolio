<?php

namespace App\Filament\Admin\Resources\NewMonths\Pages;

use App\Filament\Admin\Resources\NewMonths\NewMonthResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageNewMonths extends ManageRecords
{
    protected static string $resource = NewMonthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
