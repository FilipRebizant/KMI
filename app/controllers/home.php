<?php

class Home extends Controller
{
    public function index($name = '')
    {
//        echo 'home/index';
        $user = $this->model('User');
        $user->name = $name;
        echo $name;
        
        
    }
}