<?php
/**
*
*/

/*过滤，如果系统phpini没有开启过滤则过滤一遍,此函数不能双重过滤*/
function daddslashes($str){
  return(!get_magic_quotes_gpc())?addslashes($str):$str;
}

function c($name,$method){
    require_once BASEPATH.'/'.APPPATH.'controllers/'.$name.'Controller.php';
    $controller= $name.'Controller';
    $obj= new   $controller;
    $obj->$method();
}
/*载入模型*/
function m($name){
  require_once BASEPATH.'/'.APPPATH.'models/'.$name.'Model.php';
  $model = $name.'Model';
  $obj= new $model;
  return $obj;
}
/*
function v($name){
  require_once BASEPATH.'/'.APPPATH.'views/'.$name.'.php';
  $view = $name;
  $obj= new $view;
  return $obj;
}
*/
function loadview($name,$data){
  if(is_array($data)) extract($data);
  require_once BASEPATH.'/'.APPPATH.'views/'.$name.'.php';
}

function loadlib($name){
 
  require_once BASEPATH.'/'.APPPATH.'lib/'.$name.'.php';
}


?>