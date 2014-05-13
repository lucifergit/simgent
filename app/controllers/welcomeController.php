<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcomeController{

    function __construct(){
        echo "welcome你好这welcome";
    }

    public function index(){
        echo "welcome";
    }

    public function show(){
        echo "<br>show_welcome";
    }

}

