<?php

class User{
    
    /**

      this is login function

    */

    public function login(){
    
        return 'login success...........';
    }

    /**
        this is register function

    */
    
    public function register(){
        return 'register success';
    }

    public function logout($str){
        return $str;
    }

}


$server = new Yar_Server(new User());

$server->handle();

