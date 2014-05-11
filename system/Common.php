<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*根据url载入控制器和模型
*/
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
/*过滤，如果系统phpini没有开启过滤则过滤一遍,此函数不能双重过滤*/
function daddslashes($str){
  return(!get_magic_quotes_gpc())?addslashes($str):$str;
}
/*从url获取控制器和模型，如果没有则定义默认控制器模型*/
$controller =($_GET['c']!="")?daddslashes($_GET['c']):'home';
$method     =($_GET['m']!="")?daddslashes($_GET['m']):'index';
/*载入控制器模型*/
c($controller,$method);

?>