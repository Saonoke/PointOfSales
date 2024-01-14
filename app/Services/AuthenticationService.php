<?php 

namespace App\Services;

use App\Http\Requests\AuthenticateRequest;
use App\Http\Requests\UserPostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

interface AuthenticationService {
    function authenticate(AuthenticateRequest $request);
}