<?php
namespace App\Dao\User;

interface UserDAO{
    public function login($request);
    public function get($id);
    public function update($request);
    public function delete($id);
}