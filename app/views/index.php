<?php include('head.php');?>

<div in="main">
 	<h1>hello world</h1>
    <?php echo $data; ?>
</div>
<?php echo "脚本执行时间 ", round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 2), "s";?>
</div>
</body>
</html>