<?php
/**
 * Littlephpframework
 *===========================================
 *  github: https://github.com/szpgithub/littlephp
 *===========================================
 * @author		shizhongpu
 * @qq			272021899
 * @mail       thewebress@gmail.com
 * @createtime       2014/5/3
 * @updatetime       2014/5/24
 *
 */

//var_dump($_SERVER);

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
 * 输出"app/","system/"
 */
if (is_dir($app_folder)){ define('APPPATH', $app_folder.'/');}
if (is_dir($app_folder)){ define('SYSPATH', $sys_folder.'/');}

/* 定义入口文件当前物理路径,并如果在win环境路径下的反斜杠"\"换成Uinx"/" */
define('BASEPATH',str_replace('\\', '/', dirname(__FILE__))) ;
/*载入核心文件*/
require_once BASEPATH.'/'.SYSPATH.'Common.php';

/*载入控制器模型*/

?>