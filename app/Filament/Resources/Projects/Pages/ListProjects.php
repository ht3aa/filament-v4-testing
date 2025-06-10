<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use App\Filament\Resources\Users\UserResource;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\User;
use Filament\Actions\Action;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            Action::make('edit-user')
                ->label('Edit User')
                ->url(UserResource::getUrl(parameters: [
                    'tableAction' => EditAction::getDefaultName(),
                    'tableActionRecord' => User::first(),
                ]))
        ];
    }
}
