<?php

namespace App\Filament\Admin\Resources\Footers\Pages;

use App\Filament\Admin\Resources\Footers\FooterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageFooters extends ManageRecords
{
    protected static string $resource = FooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
