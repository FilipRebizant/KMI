<?php

class Help extends Controller
{

    public function __construct()
    {
        parent::__construct();
        echo "We are in help<br>";
    }

    function index()
    {
        $this->view->render('help/index');
    }


    public function other($arg = false)
    {

        require 'models/help_model.php';
        $model = new Help_Model();

    }
}