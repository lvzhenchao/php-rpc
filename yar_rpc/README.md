# yar框架
## MessagePack(简称MsgPack)基于二进制高效的对象序列化类库，跨语言，打包更快
- 打包协议，更小


## 安装magpack
- http://pecl.php.net/
- wget http://pecl.php.net/get/msgpack-2.0.3.tgz
- tar xf msgpack-2.0.3.tgz
- cd msgpack-2.0.3
- /usr/bin/phpize 【/www/server/php/74/bin/phpize】 【主要作用是检测php的环境还有就是在特定的目录生成相应的configure文件】
- ./configure --with-php-config=/usr/bin/php-config 【./configure --with-php-config=/www/server/php/74/bin/php-config】  编译
- make && make install
- extension=/www/server/php/74/lib/php/extensions/no-debug-non-zts-20190902/msgpack.so

## 安装yar
- http://pecl.php.net/
- wget http://pecl.php.net/get/yar-2.3.0.tgz
- cd yar-2.3.0
- /www/server/php/74/bin/phpize 
- ./configure --with-php-config=/www/server/php/74/bin/php-config  --enable-msgpack
- make && make install
- extension=/www/server/php/74/lib/php/extensions/no-debug-non-zts-20190902/yar.so








