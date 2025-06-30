<?php

namespace App\Providers;

use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        ViewAction::configureUsing(function (ViewAction $action) {
            $action
                ->icon('heroicon-o-eye')
                ->iconButton();
        });
    }
}
