<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\RegistationRequest;
use Illuminate\Http\Request;
use App\Interface\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    private AuthenticationInterface $authInterface;

    public function __construct(AuthenticationInterface $authInterface)
    {
        $this->authInterface = $authInterface;   
    }

    public function login(LoginRequest $request)
    {
        $data = [
            'email' =>$request->email,
            'password' =>$request->email,
        ];
        try{
            if($this->authInterface->login($data))
            return redirect()->route('dashboard');
        else 
        return back()->with('error', 'Email ou mot de passe incorrecte');

        } catch(\Exception $ex){
            return back()->with('error', 'Une erreur est survenue, reesayez');

        }
    }

    public function registration(RegistationRequest $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->email,
        ];
        try {
            $user = $this->authInterface->registration($data);
            Auth::login($user);
            return redirect()->route('dashboard');
        } 
        catch(\Exception $ex){
            return back()->with('error', 'une erreur est survenue lors du traitement');
            
        }

    }
}
