<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use PhpParser\Node\Expr\Cast\Bool_;

class UserPolicy
{
    public function create(User $user)
    {
        return $user->email === "mgmg@gmail.com";
    }
    public function edit(User $user, User $model)
    {
        return (bool) mt_rand(0, 1);
    }
}
