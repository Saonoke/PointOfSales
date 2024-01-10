<?php

namespace App\Services\Impl;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class AuthenticationServiceImpl implements AuthenticationService{

    private array $users = [
        "putri" => "11111"
    ];

    function authenticate(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        // validate input
        if (empty($email) || empty($password)) {
            return response()->view("user.login", [
                "title" => "Login",
                "error" => "User or password is required"
            ]);
        }

        if ($this->login($email, $password)) {
            $request->session()->put("email", $email);
            return redirect("/");
        }

        return response()->view("user.login", [
            "title" => "Login",
            "error" => "User or password is wrong"
        ]);
    }

    function login(string $email, string $password): bool
    {
        if (!isset($this->users[$email])) {
            return false;
        }

        $correctPassword = $this->users[$email];
        return $password == $correctPassword;
    }


}