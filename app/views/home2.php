<!doctype html>
<html lang="zh_cn">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>
        * {
            padding: 0;
            margin: 0;
            border: 0;
        }

        body {
            font-size: 12px;
            font-family: "宋体", Arial, Helvetica, sans-serif;
            color: #054a4e;
            margin: 0 auto;
            padding: 0;
            line-height: 24px;
            background: #656565;
        }

        #topnav {
            list-style: none;
        }

        #topnav li {
            float: left;
            text-indent: 17px;
        }

        #topnav li a {
            color: #fff;
            font-weight: bold;
        }

        #header {
            height: 60px;
            background-color: #ccc
        }
    </style>
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
        </ul>
    </div>
</div>

<div in="main">
    <h1>hello world</h1>
    <?=$first?><br>
    <?=$second?>
    <?=$site_url?>
</div>
<?php echo "脚本执行时间 ", round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 3), "s";?>
</body>
</html>