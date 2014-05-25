<?php include('head.php');?>

<div in="main">
    <h1>hello world</h1>
    <?=$first?><br>
    <?=$second?>
</div>
<?php echo "脚本执行时间 ", round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 3), "s";?>
<?php echo LITTLE_HOST,LITTLE_HTTP;  ?>
</div>
</body>
</html>