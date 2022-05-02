<?php

//$client = new Yar_Client('http://yar.com/server.php');
//
//$client->SetOpt(YAR_OPT_PACKAGER,'json');
//
//echo $client->login();
//
//echo $client->register();

Yar_Concurrent_Client::call('http://yar.com/server.php','login',[]);

Yar_Concurrent_Client::loop('call_func');

function call_func($res,$info){
    if($res==null){
        echo '处理一些 发送前要处理的逻辑';
    }else{
        var_dump($res);
        var_dump($info);
    }
}

Yar_Concurrent_Client::reset();

Yar_Concurrent_Client::call('http://yar.com/server.php','logout',['hhhhh']);
Yar_Concurrent_Client::loop('call_func');
