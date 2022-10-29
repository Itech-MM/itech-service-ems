<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\User\UserServices;

class AuthController extends Controller
{

    private UserServices $userservice;

    public function __construct(UserServices $us)
    {
        $this->userservice = $us;
    }

    public function login(LoginRequest $request){
        return $this->userservice->login($request->all());
    }
    public function registration(RegisterRequest $request){
        return $this->userservice->registration($request->all());
    }
}
