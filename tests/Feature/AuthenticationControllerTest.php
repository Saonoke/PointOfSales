<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticationControllerTest extends TestCase
{

    public function testLoginPage()
    {
        $this->get('/login')
            ->assertSeeText("Login");
    }


    public function testLoginSuccess()
    {
        $this->post('/login', [
            "email" => "putri",
            "password" => "11111"
        ])->assertRedirect("/")
            ->assertSessionHas("email", "putri");
    }

    public function testLoginForUserAlreadyLogin()
    {
        $this->withSession([
            "email" => "putri"
        ])->post('/login', [
            "email" => "putri",
            "password" => "11111"
        ])->assertRedirect("/");
    }

    public function testLoginValidationError()
    {
        $this->post("/login", [])
            ->assertSeeText("User or password is required");
    }

    public function testLoginFailed()
    {
        $this->post('/login', [
            'email' => "wrong",
            "password" => "wrong"
        ])-> assertViewIs("user.login");
    }

    public function testLogout()
    {
        $this->withSession([
            "email" => "putri"
        ])->post('/logout')
        ->assertRedirect("/");
    }
}
