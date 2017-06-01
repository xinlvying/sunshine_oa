<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>主页</title>
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
        background-opacity:0.5;

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
                <a class="navbar-brand" href="#">阳光在线</a>
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

<div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner img-responsive" style="height: 500px">
        <div class="item active">
            <img src="img/reserve.jpg" class="img-responsive img-thumbnail" alt="First slide" style="margin-left: auto;margin-right: auto;margin-top: 60px;">
<!--            <div class="carousel-caption">标题 1</div>-->
        </div>
        <div class="item">
            <img class="img-responsive img-thumbnail" src="img/525.jpg" alt="Second slide">
<!--            <div class="carousel-caption">标题 2</div>-->
        </div>
        <div class="item">
            <img class="img-responsive thumbnail" src="img/shudong.jpg" alt="Third slide">
<!--            <div class="carousel-caption">标题 3</div>-->
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel"
       data-slide="prev"></a>
    <a class="carousel-control right" href="#myCarousel"
       data-slide="next"></a>
</div>

<footer></footer>
</body>
</html>