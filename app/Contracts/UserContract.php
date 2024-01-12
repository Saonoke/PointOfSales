<?php

namespace App\Contracts;

use App\Models\User;

interface UserContract{

    public function storeUser(array $validatedData):void;

    public function editUser(array $validatedData, User $user):void;

    public function deleteUser(User $user):void;
}