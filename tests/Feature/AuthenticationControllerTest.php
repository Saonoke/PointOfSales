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
            ->assertViewIs("user.login");
    }
    public function testLoginPageForMember()
    {
        $this->withSession([
            "email" => "kou@gmail.com"
        ])->get('/login')
        ->assertRedirect("/adminDashboard");
    }

    public function testLoginSuccess()
    {
        $this->post('/login', [
            "email" => "kou@gmail.com",
            "password" => "asdf"
        ])->assertRedirect("/adminDashboard")
            ->assertSessionHas("email", "kou@gmail.com");
    }
    

    public function testLoginForUserAlreadyLogin()
    {
        $this->withSession([
            "email" => "kou@gmail.com"
        ])->post('/login', [
            "email" => "kou@gmail.com",
            "password" => "asdf"
        ])->assertRedirect("/adminDashboard");
    }

    public function testLoginValidationError()
    {
        $this->post("/login", [])
            ->assertViewIs("user.login");
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
            "email" => "kou@gmail.com"
        ])->post('/logout')
        ->assertRedirect("/");
    }

    public function testLogoutGuest()
    {
        $this->post('/logout')
        ->assertRedirect("/");
    }

}
