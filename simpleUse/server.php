<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, true);
socket_bind($socket, 0, 9501);
socket_listen($socket);

while (true) {
    $conSocket = socket_accept($socket);
    $str = "hello rpc \n";

    socket_write($conSocket ,$str, strlen($str));
}