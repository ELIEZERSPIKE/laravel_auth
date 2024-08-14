<?php

namespace App\Interface;

interface AuthenticationInterface
{
    public function login(array $data);
    public function registration(array $data);   
}
