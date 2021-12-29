# tp5.1 队列 demo

```
php think run

// 加入队列
http://localhost:8000/index/job_test/actionWithHelloJob

// 消耗队列，cli执行
php think queue:work --queue helloJobQueue --daemon
```
