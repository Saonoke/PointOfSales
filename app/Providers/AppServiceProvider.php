<?php

namespace App\Providers;

use App\Services\AuthenticationService;
use App\Services\Impl\AuthenticationServiceImpl as ImplAuthenticationServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public array $singletons = [
        AuthenticationService::class => ImplAuthenticationServiceImpl::class
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
