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
//            socket_write($conSocket , $data, strlen($data));

            preg_match("/RPC-CLASS:(.*)/", $data, $class);
            preg_match("/RPC-METHOD:(.*)/", $data, $method);
            preg_match("/RPC-PARAM:(.*)/", $data, $param);

            $class  = $class[1];
            $method = $method[1];
            $param  = $param[1];

            if (!file_exists(__DIR__."/class/".$class.".php")) {
                socket_write($conSocket , "当前类不存在", strlen("当前类不存在"));
                die;
            }
            require_once __DIR__."/class/".$class.".php";

            $obj = new $class;
            $res = $obj->$method();

            socket_write($conSocket , $res, strlen($res));
        }

    }

}

new Server();


