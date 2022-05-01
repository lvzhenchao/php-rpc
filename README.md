# 分布式架构

# RPC（Remote Procedure Call）--远程过程调用
- RPC跨越了传输层和应用层
- 从网络中获取数据，像调用本地函数一样调用远程的函数

# 架构演变
## MVC架构，业务规模很小时
## RPC架构，垂直应用越来越多时，独立成单独的服务
## SOA架构
## 微服务架构

# RPC和REST区别 REST也是一种RPC
## REST 通常采用http+json实现
## RPC http/socket + json xml 
## rest 一般主要是处理resoure接口服务，增删改查
## rpc 对内提供服务

# RPC框架与具体的协议无关，rpc可基于http或tcp协议，越底层越快
- tcp 是传输层协议
- http 是应用层协议

# RPC的数据形式，xml、json、二进制
