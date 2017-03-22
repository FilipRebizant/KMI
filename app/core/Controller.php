<?php

class Controller
{
    public function model($model) //protected
    {
//        $this->model('User');
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}