<?php
class User {
    /**
     * this is login function
     * @return string
     */
    public function login() {
        return "login";
    }

    /**
     * this is register function
     * @return string
     */
    public function register() {
        return "register";
    }
}

$server = new Yar_Server(new User());
$server->handle();