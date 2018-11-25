<?php

namespace app\index\controller;

class Index
{
    public function index()
    {
        $data=['name'=>'芊夜','age'=>20];
        return json($data);
    }
}
