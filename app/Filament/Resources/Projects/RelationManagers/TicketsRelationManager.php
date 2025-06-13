<?php

namespace App\Filament\Resources\Projects\RelationManagers;

use App\Filament\Resources\Tickets\TicketResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class TicketsRelationManager extends RelationManager
{
    protected static string $relationship = 'tickets';

    protected static ?string $relatedResource = TicketResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
