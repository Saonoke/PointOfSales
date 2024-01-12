<?php

namespace App\Services\Impl;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class AuthenticationServiceImpl implements AuthenticationService{

    function authenticate(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        // Validate input
        if (empty($email) || empty($password)) {
            return response()->view("user.login", [
                "title" => "Login",
                "error" => "User or password is required"
            ]);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            if(Auth::user()->role=='admin'){
                $request->session()->put("email", $email);
                return redirect("/adminDashboard");
            } else {
                $request->session()->put("email", $email);
                return redirect("/cashierDashboard");
            }

        } else {
            return response()->view("user.login", [
            "title" => "Login",
            "error" => "User or password is wrong"
        ]);
        }

    }
}