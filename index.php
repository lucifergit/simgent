<?php
/**
 * phpframework
 * @author		shizhongpu
  * @qq			272021899
 * @mail       thewebress@gmail.com
 * @createtime       2014/5/3
 * @updatetime       2014/5/5
 *
 */

/*定义默认时区,防止服务器端时间与客户端时间误差 */
date_default_timezone_set ("Asia/Shanghai");

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


/*
 *---------------------------------------------------------------
 *默认路径定义
 *---------------------------------------------------------------
 *$app_folder应用路径 $sys_folder系统路径
 */
$app_folder = 'app';
$sys_folder = 'system';
/*
 * 定义应用目录常量,方便在其他文件调用
 * 输出"app/"
 */
if (is_dir($app_folder)){ define('APPPATH', $app_folder.'/');}
if (is_dir($app_folder)){ define('SYSPATH', $sys_folder.'/');}
/*
 * 定义入口文件当前物理路径,并如果在win环境路径下的反斜杠"\"换成Uinx"/"
 */
define('BASEPATH',str_replace('\\', '/', dirname(__FILE__))) ;
/*载入核心文件*/
require_once BASEPATH.'/'.SYSPATH.'/Common.php';
?>
