<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>雨夜成功</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-image: url("img/bg.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment:fixed;

    }
</style>
<body>
<header>
    <nav class="navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">阳光在线</a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    header("Content-type: text/html; charset=utf-8");
                    require_once "./server/navbar_login_check.php";
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<li><a href='$row[nav_ul]'>$row[nav_name]</a></li> ";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>