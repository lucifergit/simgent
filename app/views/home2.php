<?php include('head.php');?>

<div in="main">
    <h1>hello world</h1>
    <?=$first?><br>
    <?=$second?>
</div>
<div id="post">
<h1>LTphp PHPMVC - LTphp </h1>
    欢迎使用 LTphp 开源框架 - LTphp
    <br />AMP-优雅精致的WEB应用开发MVC框架。<br />

    <p class="title">为什么选择LTphp框架</p>
    <p><i>01)</i> 快速: 框架核心文件总大小10余KB，0.0001毫秒迅速载入启动。</p>
    <p><i>02)</i> 高效: 安全高效性能、优越的资源控制模式。</p>
    <p><i>03)</i> 简洁: 单一入口、单一系统加载文件，使用、升级、维护极其简洁明了。</p>
    <p><i>04)</i> 容易: 十秒钟上手、一分钟精通。真正让您使用、扩展无拘无束、随心所欲。</p>
    <p><i>05)</i> 其它: 友好的Sql、PHP信息调试。自定义控制等...</p>

    <br />
    <p>查阅LTphp开发技术文档: <a href="https://github.com/szpgithub/littlephp">https://github.com/szpgithub/littlephp</a></p>
    <p><input value="Hello LTphp" type="button" onclick=""/></p>

</div>
    <div>
    <?php echo "脚本执行时间 ", round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 3), "s";?>
    <?php echo LITTLE_HOST."<br>".LITTLE_HTTP."<br>".LITTLE_HTTP."<br>".APPPATH;  ?>
    </div>
</div>
</body>
</html>