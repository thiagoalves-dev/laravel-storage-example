<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\User;

class UsersController extends Controller
{
    public function store(UserStoreRequest $request)
    {
        return User::query()
            ->create($request->validated());
    }
}
