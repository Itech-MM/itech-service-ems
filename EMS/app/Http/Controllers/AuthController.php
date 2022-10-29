<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\User\UserServices;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{

    private UserServices $userservice;

    public function __construct(UserServices $us)
    {
        $this->userservice = $us;
    }

    public function login(LoginRequest $request){
        $data = $this->userservice->login($request->all());
        if(!$data['ok']){
            $data['current'] = 'login';
            $data['reference'] = 'registration';
            return Inertia::render('Auth',['current'=>'login','reference'=>'registration','errors'=>$data]);
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function registration(RegisterRequest $request){
        return $this->userservice->registration($request->all());
    }
}
