<?php

namespace App\Filament\Admin\Resources\Abouts;

use App\Filament\Admin\Resources\Abouts\Pages\ManageAbouts;
use App\Models\About;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'About Section';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('section_label')
                ->label('Section Label')
                ->required()
                ->maxLength(50),

            TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(255),

            TextInput::make('highlight')
                ->label('Highlighted Text')
                ->maxLength(255),

            Textarea::make('description')
                ->label('Description')
                ->rows(5)
                ->required(),

            FileUpload::make('image')
                ->label('About Image')
                ->image()
                ->directory('about')
                ->imagePreviewHeight('200'),

            TextInput::make('years_experience')
                ->label('Years Experience')
                ->numeric()
                ->minValue(0)
                ->required(),

            TextInput::make('projects_completed')
                ->label('Projects Completed')
                ->numeric()
                ->minValue(0)
                ->required(),

            TextInput::make('happy_clients')
                ->label('Happy Clients')
                ->numeric()
                ->minValue(0)
                ->required(),

            Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->circular(),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),

                TextColumn::make('years_experience')
                    ->label('Experience'),

                TextColumn::make('projects_completed')
                    ->label('Projects'),

                TextColumn::make('happy_clients')
                    ->label('Clients'),

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
            'index' => ManageAbouts::route('/'),
        ];
    }
}
