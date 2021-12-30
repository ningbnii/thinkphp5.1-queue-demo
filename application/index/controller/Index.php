<?php

namespace app\index\controller;

class Index
{
    public function index()
    {
        $data = [
            'name'=>'ning',
            'age'=>18,
        ];
        cache('test_data',json_encode($data));
    }
}
