<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, true);
socket_bind($socket, 0, 9501);
socket_listen($socket);

while (true) {
    $conSocket = socket_accept($socket);
    $str = "hello rpc ".date("Y-m-d H:i:s")."\n";

    echo socket_read($conSocket, 1024);
//    socket_write($conSocket ,$str, strlen($str));
}