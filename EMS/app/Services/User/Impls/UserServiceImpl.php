<?php
namespace App\Services\User\Impls;

use App\Common\Utils\Generator;
use App\Common\Utils\ResponseUtils;
use App\Dao\User\UserDAO;
use App\Models\User;
use App\Services\User\UserServices;
use Illuminate\Support\Facades\Auth;

class UserServiceImpl implements UserServices{
    private UserDAO $userDao;
    public function __construct(UserDAO $udao)
    {
        $this->userDao = $udao;
    }
    public function login($request){
        if(!Auth::attempt(['login_id' => $request['loginId'], 'password' => $request['password']])){
            return ResponseUtils::responseData(null,['success'=>false,'message'=>'Invalid login id or password!','code'=>401]);
        }
        $user = Auth::user();
        $token = $user->createToken('main')->plainTextToken;
        return ResponseUtils::responseData(['token'=>$token,'user'=>$user],['success'=>true,'message'=>'Login success!','code'=>200]);
    }
    public function registration($request){
        $user = User::create([
            'name'=>$request['name'],
            'login_id'=> Generator::loginId('admin'),
            'email'=>$request['email'],
            'password'=>bcrypt($request['password'])
        ]);
        $token = $user->createToken('main')->plainTextToken;
        return ResponseUtils::responseData(['user'=>$user,'token'=>$token],['success'=>true,'message'=>'Registration success!','code'=>200]);
    }
    public function get($id){}
    public function update($request){}
    public function delete($id){}
}