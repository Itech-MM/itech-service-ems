<?php

namespace App\Http\Controllers;

use App\Services\App\AppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public $user;
    public AppService $appservice;
    public function __construct(AppService $service)
    {
        $this->user = Auth::user();
        $this->appservice = $service;
    }
    public function dashboard()
    {
        
    }
}
