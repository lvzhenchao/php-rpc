<?php

class Client {

    public $socket;
    public $ip;
    public $port;
    public $protocol;

    public function __construct($ip, $port){
        $this->ip   = $ip;
        $this->port = $port;
        $this->connect();
    }

    public function connect(){

        $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_connect($this->socket, $this->ip, $this->port);

    }

    public function send($class, $method, $param){
        $this->protocol  = "RPC-CLASS:{$class}\n";
        $this->protocol .= "RPC-METHOD:{$method}\n";
        $this->protocol .= "RPC-PARAM:".json_encode($param)."\n";

        socket_write($this->socket, $this->protocol, strlen($this->protocol));

        echo socket_read($this->socket, 1024);
    }
}

$client = new Client("127.0.0.1", 9501);
$client->send('User1', 'Index', ['name' => 'lzc', 'age' => 13]);


