<?php

/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 2017-04-08
 * Time: 15:06
 */
class Dashboard extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false){
            Session::destroy();
            header('location: ../login');
            exit;
        }

        $this->view->js = array('dashboard/js/custom.js');
    }

    function index()
    {
        $this->view->render('dashboard/index');
    }

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}

