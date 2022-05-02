<?php

$client = new Yar_Client('http://yar.com/server.php');
$client->SetOpt(YAR_OPT_PACKAGER, "json");
$client->SetOpt(YAR_OPT_CONNECT_TIMEOUT, 1000);
//var_dump($client);
$client->login([]);