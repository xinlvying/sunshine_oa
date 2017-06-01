<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>预约信息</title>
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

<div style="margin-left:auto;margin-right:auto;margin-top:20PX;width:100%;opacity: 0.75">
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizotal">
                <div class="col-xs-2">
                    <select class="form-control">
                        <option value="wk_1">第一周</option>
                        <option value="wk_2">第二周</option>
                        <option value="wk_3">第三周</option>
                        <option value="wk_4">第四周</option>
                        <option value="wk_5">第五周</option>
                        <option value="wk_6">第六周</option>
                        <option value="wk_7">第七周</option>
                        <option value="wk_8">第八周</option>
                        <option value="wk_9">第九周</option>
                        <option value="wk_10">第十周</option>
                        <option value="wk_11">第十一周</option>
                        <option value="wk_12">第十二周</option>
                        <option value="wk_13">第十三周</option>
                        <option value="wk_14">第十四周</option>
                        <option value="wk_15">第十五周</option>
                        <option value="wk_16">第十六周</option>
                        <option value="wk_17">第十七周</option>
                        <option value="wk_18">第十八周</option>
                        <option value="wk_19">第十九周</option>
                    </select>
                </div>
                <div class="col-xs-2">
                    <select class="form-control">
                        <option value="monday">星期一</option>
                        <option value="tuesday">星期二</option>
                        <option value="wednesday">星期三</option>
                        <option value="thursday">星期四</option>
                        <option value="friday">星期五</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-default" value="查看">
            </form>

            <table class="table text-center table-responsive">
                <thead>
                    <tr>
                        <th class="text-center">时间</th>
                        <th class="text-center">姓名</th>
                        <th class="text-center">性别</th>
                        <th class="text-center">联系电话</th>
                        <th class="text-center">值班老师</th>
                        <th class="text-center">登记人</th>
                        <th class="text-center">登记时间</th>
                        <th class="text-center">备注</th>
                    </tr>
                </thead>
                <tr>
                    <td>09:30~10:30</td>
                </tr>
                <tr>
                    <td>10:30~11:45</td>
                </tr>
                <tr>
                    <td>14:30~16:00</td>
                </tr>
                <tr>
                    <td>16:00~17:30</td>
                </tr>
                <tr>
                    <td>19:30~20:30</td>
                </tr>
                <tr>
                    <td>20:30~21:30</td>
                </tr>
            </table>
        </div>
    </div>
</div>