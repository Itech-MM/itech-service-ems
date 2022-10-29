<?php
namespace App\Services\User;
interface UserServices {
    public function login($request);
    public function registration($request);
    public function get($id);
    public function update($request);
    public function delete($id);
}