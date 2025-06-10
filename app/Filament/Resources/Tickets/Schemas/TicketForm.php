<?php

namespace App\Filament\Resources\Tickets\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TicketForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('code')
                    ->required(),
                TextInput::make('parent_id')
                    ->numeric(),
                TextInput::make('project_status_id')
                    ->required()
                    ->numeric(),
                TextInput::make('project_id')
                    ->required()
                    ->numeric(),
                TextInput::make('project_label_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
