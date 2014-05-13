<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class homeModel {
   
     function getindex(){
         return "这是模型输出的内容,这里是首页";
     }
     function get(){
         return "这是模型输出的内容,这是博客内容";
     }


    public function user_info() {
    return array(
        'title'=>'这是模板页title',
        'first'=>'zhanggzy',
        'second'=>':)'
    );
    }
}

?>