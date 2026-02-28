<?php

namespace App\Filament\Admin\Resources\ClientReviews;

use App\Filament\Admin\Resources\ClientReviews\Pages\ManageClientReviews;
use App\Models\ClientReview;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ClientReviewResource extends Resource
{
    protected static ?string $model = ClientReview::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'client_name';

    protected static ?string $navigationLabel = 'Client Reviews';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('client_name')
                    ->label('Client Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('client_title')
                    ->label('Client Title')
                    ->maxLength(255),

                Textarea::make('review')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('client_image')
                    ->image()
                    ->directory('client-reviews'),

                Select::make('rating')
                    ->options([
                        1 => '1 Star',
                        2 => '2 Stars',
                        3 => '3 Stars',
                        4 => '4 Stars',
                        5 => '5 Stars',
                    ])
                    ->default(5)
                    ->required(),

                Toggle::make('is_featured')
                    ->label('Featured'),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client_name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('client_title')
                    ->sortable(),

                TextColumn::make('rating')
                    ->label('Rating'),

                ToggleColumn::make('is_featured')
                    ->label('Featured'),

                ToggleColumn::make('is_active')
                    ->label('Active'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageClientReviews::route('/'),
        ];
    }
}
