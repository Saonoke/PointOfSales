<?php

namespace App\Contracts;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UserPostRequest;
use Illuminate\Http\Request;

interface UserContract{

    public function storeUser(UserPostRequest $request): RedirectResponse;

    public function editUser(UserPostRequest $request, User $user): RedirectResponse;

    public function deleteUser(User $user): RedirectResponse;
}