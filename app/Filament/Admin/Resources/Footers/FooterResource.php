<?php

namespace App\Filament\Admin\Resources\Footers;

use App\Filament\Admin\Resources\Footers\Pages\ManageFooters;
use App\Models\Footer;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'company_name';

    protected static ?string $navigationLabel = 'Footers';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')
                    ->label('Company Name')
                    ->maxLength(255),

                Textarea::make('about')
                    ->label('About')
                    ->columnSpanFull(),

                TextInput::make('email')
                    ->email()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->maxLength(20),

                TextInput::make('address')
                    ->maxLength(255),

                TextInput::make('facebook')
                    ->label('Facebook URL')
                    ->maxLength(255),

                TextInput::make('twitter')
                    ->label('Twitter URL')
                    ->maxLength(255),

                TextInput::make('instagram')
                    ->label('Instagram URL')
                    ->maxLength(255),

                TextInput::make('linkedin')
                    ->label('LinkedIn URL')
                    ->maxLength(255),

                TextInput::make('copyright_text')
                    ->label('Copyright Text')
                    ->maxLength(255),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_name')
                    ->label('Company')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->sortable(),

                TextColumn::make('phone')
                    ->sortable(),

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
            'index' => ManageFooters::route('/'),
        ];
    }
}
