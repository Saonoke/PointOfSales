<?php

namespace Tests\Feature;

use App\Services\AuthenticationService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationServiceTest extends TestCase
{
    private AuthenticationService $userService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(AuthenticationService::class);
    }

    public function testLoginSuccess()
    {
        self::assertTrue($this->userService->login("putri", "11111"));
    }

    public function testLoginUserNotFound()
    {
        self::assertFalse($this->userService->login("denny", "22222"));
    }

    public function testLoginWrongPassword()
    {
        self::assertFalse($this->userService->login("putri", "salah"));
    }
}
