<?php

namespace App\Services;

use App\Models\User;
use App\Contracts\UserContract;
use App\Http\Requests\UserPostRequest;
use Illuminate\Http\RedirectResponse;

class UserService implements UserContract{

    public function storeUser(UserPostRequest $request): RedirectResponse{
        
        // Retrieve the validated input data...
        $validated = $request->validated();

        // Create a new User instance using the validated data...
        User::create($validated->all());

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function editUser(UserPostRequest $request, User $user): RedirectResponse{

        $validated = $request->validated();

        $user->update($validated->all());

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user): RedirectResponse{
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}


