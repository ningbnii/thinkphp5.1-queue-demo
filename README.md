# tp5.1 队列 demo

安装 think-queue

> tp5.1 对应的为 think-queue v2.0 版本，tp6 对应的是 v3.0 版本，安装的时候需要带上版本
> composer require think-queue ^2.0

```
php think run

// 加入队列
http://localhost:8000/index/job_test/actionWithHelloJob

// 消耗队列，cli执行
php think queue:work --queue helloJobQueue --daemon
```
