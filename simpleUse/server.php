<?php

Class Server {

    public $socket;
    public $ip   = 0;
    public $port = 9501;

    public function __construct()
    {
        $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_set_option($this->socket, SOL_SOCKET, SO_REUSEADDR, true);
        socket_bind($this->socket, $this->ip, $this->port);
        socket_listen($this->socket);

        while (true) {
            $conSocket = socket_accept($this->socket);
            $str = "hello rpc ".date("Y-m-d H:i:s")."\n";

            $data = socket_read($conSocket, 1024);
            socket_write($conSocket , $data, strlen($data));
        }

    }

}

new Server();


