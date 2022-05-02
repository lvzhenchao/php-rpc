<?php

$client = new Yar_Client('http://yar.com/server.php');
var_dump($client);
$client->login();