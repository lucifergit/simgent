<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* *
 *
 * 运行环境配置,错误提示
 *
 *开发测试的时候开启错误提示，生产的时候屏蔽所有错误，防止透露
 * 服务器信息
 */


//header("Content-type: text/html; charset=utf-8");
/*开启所有错误-开发环境*/
error_reporting(-1);
ini_set('display_errors', 1);


/*屏蔽所有错误-生产环境*/
//error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
//ini_set('display_errors', 0);

/*定义默认时区,防止服务器端时间与客户端时间误差 */
date_default_timezone_set ("Asia/Shanghai");


/*主机网址-网站wwwroot根目录*/
define ('LITTLE_HOST', (empty($_SERVER["HTTPS"]) || $_SERVER['HTTPS'] == 'off' ? 'http://' : 'https://') . $_SERVER['HTTP_HOST']); 
/*网站脚本运行根目录网址*/
define ('LITTLE_HTTP', LITTLE_HOST . str_ireplace('/index.php', '', $_SERVER['SCRIPT_NAME']) . '/');			


require_once  BASEPATH.'/'.SYSPATH.'Functions.php';
require_once   BASEPATH.'/'.SYSPATH.'Core/AppController.php';
require_once  BASEPATH.'/'.SYSPATH.'Core/AppModel.php';

/*从url获取控制器和模型，如果没有则定义默认控制器模型*/
$controller =( isset($_GET['c'])!="")?daddslashes($_GET['c']):'home';
$method     =(isset($_GET['m'])!="")?daddslashes($_GET['m']):'index';
c($controller,$method);
?>