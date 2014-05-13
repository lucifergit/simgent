<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 *---------------------------------------------------------------
 * 错误提示
 *---------------------------------------------------------------
 *开发测试的时候开启错误提示，生产的时候屏蔽所有错误，防止透露
 * 服务器信息
 */
/*开启所有错误-开发环境*/
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 0);
/*屏蔽所有错误-生产环境*/
//error_reporting(-1);
//ini_set('display_errors', 1);

require_once  BASEPATH.'/'.SYSPATH.'Functions.php';
require_once   BASEPATH.'/'.SYSPATH.'Core/BaseController.php';
require_once  BASEPATH.'/'.SYSPATH.'Core/BaseModel.php';

/*从url获取控制器和模型，如果没有则定义默认控制器模型*/
$controller =($_GET['c']!="")?daddslashes($_GET['c']):'home';
$method     =($_GET['m']!="")?daddslashes($_GET['m']):'index';
/*载入控制器模型*/
c($controller,$method);

?>