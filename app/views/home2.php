<!doctype html>
<html lang="zh_cn">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?php echo LITTLE_HTTP.APPPATH."views/css/index.css"; ?>">

</head>
<body>
<div id="header">
    <div id="logo"></div>
    <div id="herright"></div>
    <div id="nav">
        <ul id="topnav">
            <li><a href="index.php">首页</a></li>
            <li><a href="index.php?c=home&m=showmodel">博客</a></li>
            <li><a href="index.php?c=home&m=showmodel2">博客</a></li>
            <li><a href="index.php?c=home&m=showcss">博客css</a></li>
        </ul>
    </div>
</div>

<div in="main">
    <h1>hello world</h1>
    <?=$first?><br>
    <?=$second?>
</div>
<?php echo "脚本执行时间 ", round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 3), "s";?>
<?php echo LITTLE_HOST."<br>".LITTLE_HTTP."<br>".LITTLE_HTTP."<br>".APPPATH;  ?>
</body>
</html>