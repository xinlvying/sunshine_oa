<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>管理员登录</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
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
<div style="margin-left:auto;margin-right:auto;margin-TOP:100PX;width:20em;">
    <!--下面是用户名输入框-->
    <form id="admin_login_form">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input id="username" type="text" class="form-control" placeholder="用户名">
            </div>
        </div>
        <!--下面是密码输入框-->
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input id="password" type="password" class="form-control" placeholder="密码">
            </div>
        </div>
        <div id="divMsg"></div>
        <!--下面是登陆按钮,包括颜色控制-->
        <div class="modal-footer">
            <button type="reset" class="btn btn-default" id="reset-btn">重置</button>
            <button type="button" class="btn btn-default" id="login_btn">登录</button>
        </div>
    </form>
</div>
<footer></footer>
</body>
</html>
