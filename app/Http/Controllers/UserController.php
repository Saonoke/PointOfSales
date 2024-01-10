<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Contracts\UserContract;
use App\Http\Requests\UserPostRequest;

class UserController extends Controller
{
    protected UserContract $contract;

    public function __construct(UserContract $contract)
    {
        $this->contract = $contract;
    }

    public function index(): View{
        $user = User::latest();

        return view('user.index', compact('user'));
    }
    public function addUser(): View{
        return view('user.create');
    }

    public function storeUser(UserPostRequest $request): RedirectResponse{
        return $this->contract->storeUser($request);
    }

    public function updateUser(User $user): View{
        return view('user.edit',compact('user'));
    }

    public function editUser(UserPostRequest $request, User $user): RedirectResponse{
        return $this->contract->editUser($request, $user);
    }

    public function deleteUser(User $user): RedirectResponse{
        return $this->contract->deleteUser($user);
    }
}
