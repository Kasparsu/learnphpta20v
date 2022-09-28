<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerForm(){
        view('auth/register');
    }
    public function loginForm(){
        view('auth/login');
    }
    public function register(){
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->created_at = time();
        $user->modified_at = time();
        $user->save();
        header('Location: /login');
    }
    public function login(){
        $users = User::where('email', $_POST['email']);
        if(count($users)==1){
            $user = $users[0];
            if(password_verify($_POST['password'], $user->password)){
                $_SESSION['user_id'] = $user->id;
                header('Location: /');
                die();
            }
        }
        header('Location: /login');
    }

    public function logout(){
        unset($_SESSION['user_id']);
        header('Location: /');
    }
}