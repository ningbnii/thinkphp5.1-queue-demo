<?php

namespace app\index\controller;

use think\Controller;
use think\queue\Job;
use think\Request;

class Hello extends Controller
{
    public function fire(Job $job, $data)
    {
        $isJobDone = $this->doHelloJob($data);
        if ($isJobDone) {
            $job->delete();
            print("<info>Hello Job has been done and deleted" . "</info>\n");
        } else {
            if ($job->attempts() > 3) {
                print("<warn>Hello Job has been retried more than 3 times!" . "</warn>\n");
                $job->delete();
            }
        }
    }

    protected function doHelloJob($data)
    {
        print("<info>Hello Job Started. job Data is: " . var_export($data, true) . "</info> \n");
        print("<info>Hello Job is Fired at " . date('Y-m-d H:i:s') . "</info> \n");
        print("<info>Hello Job is Done!" . config('test') . "</info> \n");
        return true;
    }
}
