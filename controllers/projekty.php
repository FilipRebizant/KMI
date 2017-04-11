<?php

class Projekty extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view->render('projekty/index');
    }
}