<?php
namespace App\Services\App\Impls;

use App\Services\App\AppService;
use Illuminate\Support\Facades\Auth;

class AppServiceImpl implements AppService{
    private $user;
    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function dashboard(){
         
    }
}