<?php 

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

interface AuthenticationService {
    function authenticate(Request $request);
    function login(string $user, string $password): bool;
}