<?php

namespace App\Filament\Admin\Resources\ClientReviews\Pages;

use App\Filament\Admin\Resources\ClientReviews\ClientReviewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageClientReviews extends ManageRecords
{
    protected static string $resource = ClientReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
