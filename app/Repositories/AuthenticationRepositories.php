<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Interface\AuthenticationInterface;

class AuthenticationRepositories implements AuthenticationInterface
{
    public function login($data){
        return Auth::attempt($data);
    }
    public function registration(array $data){
        return User::create($data);
    }  
}


    /**
     * Create a new class instance.
     */
    // public function __construct()
    // {
    //     //
    // }

   

