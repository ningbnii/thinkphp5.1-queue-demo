<?php

namespace app\index\controller;

use think\Controller;
use think\Queue;
use think\Request;

class JobTest extends Controller
{
    public function actionWithHelloJob()
    {
        $jobHandlerClassName = 'app\index\controller\Hello';
        $jobQueueName = 'helloJobQueue';
        $jobData = ['ts' => time(), 'bizId' => uniqid(), 'a' => 1, 'test' => config('test')];
        $isPushed = Queue::push($jobHandlerClassName, $jobData, $jobQueueName);
        if ($isPushed !== false) {
            echo date('Y-m-d H:i:s') . '队列添加成功';
        } else {
            echo '队列添加失败';
        }
    }
}
