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
        $user = User::latest()->get();

        return view('user.index', compact('user'));
    }
    public function addUser(): View{
        return view('user.create');
    }

    public function storeUser(UserPostRequest $request): RedirectResponse{
        $validated = $request->validated();
        $this->contract->storeUser($validated);
        // return $this->contract->storeUser($request);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }   

    public function updateUser(User $user): View{
        return view('user.edit',compact('user'));
    }

    public function editUser(UserPostRequest $request, User $user): RedirectResponse{
        $validated = $request->validated();
        $this->contract->editUser($validated, $user);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user): RedirectResponse{
        $this->contract->deleteUser($user);

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}
