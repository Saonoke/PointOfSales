<?php
namespace App\Http\Controllers;

use App\Services\AuthenticationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthenticationController extends Controller
{
    private AuthenticationService $authenticationService;

    /**
     * @param AuthenticationService $authenticationService
     */
    public function __construct(AuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    public function login(): Response
    {
        return response()
            ->view("user.login", [
                "title" => "Login"
            ]);
    }

    public function doLogin(Request $request): Response|RedirectResponse
    {
        // Call the authenticate method from the AuthenticationService
        return $this->authenticationService->authenticate($request);
    }

    public function doLogout(Request $request): RedirectResponse
    {
        $request->session()->forget("email");
        return redirect("/");
    }
}