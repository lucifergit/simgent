<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homeController{

    function __construct(){
      
    }

    public function index(){
        $model= m('home');
        $data["data"]=$model->getindex();
          $data["title"]="首页";
        loadview('index',$data);
    }

    public function showmodel(){
        $model= m('home');
        $data["data"]=$model->get();;
        $data["title"]="博客";
        loadview('index',$data);
  }
  
    public function showmodel2(){
        $model= m('home');
        $data=$model->user_info();
        loadview('home',$data);
    }
    public function aaa(){
     var_dump( $_SERVER);
    echo site_host()."111";
    }
    
    public function showcss(){
    $model= m('home');
    $data=$model->user_info();
    loadview('home2',$data);
}
}
