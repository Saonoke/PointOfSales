<?php

namespace App\Providers;

use App\Services\AuthenticationService;
use App\Services\Impl\AuthenticationServiceImpl as ImplAuthenticationServiceImpl;
use App\Services\Impl\ItemServiceImpl;
use App\Services\Impl\TransactionServiceImpl;
use App\Services\ItemService;
use App\Services\TransactionService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public array $singletons = [
        AuthenticationService::class => ImplAuthenticationServiceImpl::class,
        TransactionService::class => TransactionServiceImpl::class,
        ItemService::class => ItemServiceImpl::class
        
    ];

    public function provides(): array
    {
        return [AuthenticationService::class];
    }
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
