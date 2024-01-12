<?php

namespace App\Services;

use App\Models\User;
use App\Contracts\UserContract;


class UserService implements UserContract{

    public function storeUser(array $validatedData):void{
        User::create($validatedData);
    }

    public function editUser(array $validatedData, User $user):void{
        $user->update($validatedData);  
    }

    public function deleteUser(User $user):void{
        $user->delete();
    }
}


