<?php

namespace App\Filament\Admin\Resources\BrandDesigns\Pages;

use App\Filament\Admin\Resources\BrandDesigns\BrandDesignResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageBrandDesigns extends ManageRecords
{
    protected static string $resource = BrandDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
