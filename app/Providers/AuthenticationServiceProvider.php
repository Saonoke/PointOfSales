<?php

namespace App\Providers;

use App\Services\AuthenticationService;
use App\Services\AuthenticationServiceImpl;
use App\Services\Impl\AuthenticationServiceImpl as ImplAuthenticationServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons =[
        AuthenticationService::class=> ImplAuthenticationServiceImpl::class
    ];

    public function provides(): array{
        return [AuthenticationService::class];
    }

    public function register(): void
    {
        //
    }

    
    public function boot(): void
    {
        //
    }
}
