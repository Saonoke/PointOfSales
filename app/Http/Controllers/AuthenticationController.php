<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Http\Requests\UserPostRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{

    /**
     * @param AuthenticationService $authenticationService
     */
    public function __construct(
        private AuthenticationService $authenticationService
    ) {
    }

    public function login(): Response
    {
        return response()
            ->view("user.login");
    }

    public function doLogin(AuthenticateRequest $request): Response|RedirectResponse
    {
        $validated = $request->validated();

        if($this->authenticationService->authenticate($request)){
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('cashier.dashboard');
            }
        } else {
            return back()->withErrors([
                'email' => 'Email or password is wrong',
            ])->onlyInput('email');        }
    }

    public function doLogout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
