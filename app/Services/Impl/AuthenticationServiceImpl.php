<?php

namespace App\Services\Impl;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AuthenticationServiceImpl implements AuthenticationService{
    function authenticate(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            $userData = [
                'email' => Auth::user()->email,
                'role' => Auth::user()->role,
            ];

            if(Auth::user()->role=='admin'){
                $request->session()->put("userData",$userData);
                return redirect("/adminDashboard");
            } else {
                $request->session()->put("userData", $userData);
                return redirect("/cashierDashboard");
            }

        } else {
            return response()->view("user.login", [
            "title" => "Login",
            "error" => "Email or password is wrong"
        ]);
        }

    }
}