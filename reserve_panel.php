<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/bootstrapValidator.min.css">
    <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrapValidator.min.js"></script>
    <title>预约登记</title>
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

<div style="margin-left:auto;margin-right:auto;margin-top:100PX;width:50em;opacity: 0.75">
    <div class="panel panel-default">
        <div class="panel-body">

            <form class="form-horizontal">
                <div class="form-group">
                    <label id="week" class="col-xs-6 control-label" style="text-align: left"></label>
                    <div class="col-xs-3" style="float: right">
                        <select class="form-control" id="select" onchange="select_onclick(this)">
                            <option class="null" value="1">第一周</option>
                            <option class="null" value="2">第二周</option>
                            <option class="null" value="3">第三周</option>
                            <option class="null" value="4">第四周</option>
                            <option class="null" value="5">第五周</option>
                            <option class="null" value="6">第六周</option>
                            <option class="null" value="7">第七周</option>
                            <option class="null" value="8">第八周</option>
                            <option class="null" value="9">第九周</option>
                            <option class="null" value="10">第十周</option>
                            <option class="null" value="11">第十一周</option>
                            <option class="null" value="12">第十二周</option>
                            <option class="null" value="13">第十三周</option>
                            <option class="null" value="14">第十四周</option>
                            <option class="null" value="15">第十五周</option>
                            <option class="null" value="16">第十六周</option>
                            <option class="null" value="17">第十七周</option>
                            <option class="null" value="18">第十八周</option>
                            <option class="null" value="19">第十九周</option>
                        </select>
                    </div>
                </div>
            </form>

            <table class="table table-responsive text-center">
                <thead>
                    <tr>
                        <th class="text-center"><button type="button" class="btn btn-success">时&nbsp&nbsp间/星&nbsp&nbsp期</button></th>
                        <th class="text-center"><button type="button" class="btn btn-success">星期一</button></th>
                        <th class="text-center"><button type="button" class="btn btn-success">星期二</button></th>
                        <th class="text-center"><button type="button" class="btn btn-success">星期三</button></th>
                        <th class="text-center"><button type="button" class="btn btn-success">星期四</button></th>
                        <th class="text-center"><button type="button" class="btn btn-success">星期五</button></th>
                    </tr>
                </thead>
                <tr>
                    <td><button type="button" class="btn btn-success">09:30~11:45</button></td>
                    <td><button type="button" class="btn btn-success" id="monday_morning" data-toggle="modal" data-target="#morning_myModal">张老师</button></td>
                    <td><button type="button" class="btn btn-success" id="tuesday_morning" data-toggle="modal" data-target="#morning_myModal">熊老师</button></td>
                    <td><button type="button" class="btn btn-success" id="wednesday_morning" data-toggle="modal" data-target="#morning_myModal">陈老师</button></td>
                    <td><button type="button" class="btn btn-success" id="thursday_morning" data-toggle="modal" data-target="#morning_myModal">黄老师</button></td>
                    <td><button type="button" class="btn btn-success" id="firday_morning" data-toggle="modal" data-target="#morning_myModal">高老师</button></td>
                </tr>

                <tr>
                    <td><button type="button" class="btn btn-success">14:30~17:30</button></td>
                    <td><button type="button" class="btn btn-success" id="monday_afternoon" data-toggle="modal" data-target="#afternoon_myModal">汤老师</button></td>
                    <td><button type="button" class="btn btn-success" id="tuesday_afternoon" data-toggle="modal" data-target="#afternoon_myModal">何老师</button></td>
                    <td><button type="button" class="btn btn-success" id="wednesday_afternoon" data-toggle="modal" data-target="#afternoon_myModal">谭老师</button></td>
                    <td><button type="button" class="btn btn-success" id="thursday_afternoon" data-toggle="modal" data-target="#afternoon_myModal">杨老师</button></td>
                    <td><button type="button" class="btn btn-success" id="firday_afternoon" data-toggle="modal" data-target="#afternoon_myModal">王老师</button></td>
                </tr>

                <tr>
                    <td><button type="button" class="btn btn-success">19:30~21:30</button></td>
                    <td><button type="button" class="btn btn-success" id="monday_night" data-toggle="modal" data-target="#night_myModal">夏老师</button></td>
                    <td><button type="button" class="btn btn-success" id="tuesday_night" data-toggle="modal" data-target="#night_myModal">黄老师</button></td>
                    <td><button type="button" class="btn btn-success" id="wednesday_night" data-toggle="modal" data-target="#night_myModal">陈老师</button></td>
                    <td><button type="button" class="btn btn-success" id="thursday_night" data-toggle="modal" data-target="#night_myModal">朱老师</button></td>
                    <td><button type="button" class="btn btn-success" id="firday_night" data-toggle="modal" data-target="#night_myModal">沈老师</button></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="morning_myModal" tabindex="-1" role="dialog" aria-labelledby="morning_myModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">预约信息</h4>
            </div>
            <div class="modal-body">
                <form action="server/book_register.php" method="post" class="form-horizontal reserve_form" role="form">
                    <div class="form-group">
                        <label for="morning_myModal_name" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="morning_myModal_name" placeholder="请输入名字">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="morning_myModal_male" class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sex">
                                <option id="morning_myModal_male" value="男">男</option>
                                <option id="morning_myModal_female" value="女">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="morning_myModal_tel" class="col-sm-2 control-label">电话</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tel" id="morning_myModal_tel" placeholder="请输入电话以便我们联系">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">咨询周次</label>
                        <div class="col-sm-3">
                            <span class="form-control modal_week" disabled="disabled"></span>
                        </div>

                        <label for="morning_time_1" class="col-sm-2 control-label">咨询时间</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="time">
                                <option id="morning_time_1" value="09:30~10:30">09:30~10:30</option>
                                <option id="morning_time_2" value="10:30~11:45">10:30~11:45</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="morning_myModal_teacher" class="col-sm-2 control-label">值班老师</label>
                        <div class="col-sm-10">
                            <span class="form-control teacher" disabled="disabled"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="morning_myModal_register_person" class="col-sm-2 control-label">登记人</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="register_person" id="morning_myModal_register_person" placeholder="个人预约可不填，管理员预约必填">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="morning_myModal_remarks" class="col-sm-2 control-label">备注</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="remarks" id="morning_myModal_remarks" placeholder="请填写咨询方向以及简要情况说明,管理员填写其他备注">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default reserve_button">预约</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="afternoon_myModal" tabindex="-1" role="dialog" aria-labelledby="afternoon_myModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">预约信息</h4>
            </div>
            <div class="modal-body">
                <form action="server/book_register.php" method="post" class="form-horizontal reserve_form" role="form">
                    <div class="form-group">
                        <label for="afternoon_myModal——name" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="afternoon_myModal_name" placeholder="请输入名字">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="afternoon_myModal_male" class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sex">
                                <option id="afternoon_myModal_male" value="男">男</option>
                                <option id="afternoon_myModal_female" value="女">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="afternoon_myModal_tel" class="col-sm-2 control-label">电话</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tel" id="afternoon_myModal_tel" placeholder="请输入电话以便我们联系">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">咨询周次</label>
                        <div class="col-sm-3">
                            <span class="form-control modal_week" disabled="disabled"></span>
                        </div>

                        <label for="afternoon_time_1" class="col-sm-2 control-label">咨询时间</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="time">
                                <option id="afternoon_time_1" value="14:30~16:00">14:30~16:00</option>
                                <option id="afternoon_time_2" value="16:00~17:30">16:00~17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="afternoon_myModal_teacher" class="col-sm-2 control-label">值班老师</label>
                        <div class="col-sm-10">
                            <span class="form-control teacher" disabled="disabled"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="afternoon_myModal_register_person" class="col-sm-2 control-label">登记人</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="register_person" id="afternoon_myModal_register_person" placeholder="个人预约可不填，管理员预约必填">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="afternoon_myModal_remarks" class="col-sm-2 control-label">备注</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="remarks" id="afternoon_myModal_remarks" placeholder="请填写咨询方向以及简要情况说明,管理员填写其他备注">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default reserve_button">预约</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="night_myModal" tabindex="-1" role="dialog" aria-labelledby="night_myModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">预约信息</h4>
            </div>
            <div class="modal-body">
                <form action="server/book_register.php" method="post" class="form-horizontal reserve_form" role="form">
                    <div class="form-group">
                        <label for="night_myModal_name" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="night_myModal_name" placeholder="请输入名字">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="night_myModal_male" class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sex">
                                <option id="night_myModal_male" value="男">男</option>
                                <option id="night_myModal_female" value="女">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="night_myModal_tel" class="col-sm-2 control-label">电话</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tel" id="night_myModal_tel" placeholder="请输入电话以便我们联系">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">咨询周次</label>
                        <div class="col-sm-3">
                            <span class="form-control modal_week" disabled="disabled"></span>
                        </div>

                        <label for="night_time_1" class="col-sm-2 control-label">咨询时间</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="time">
                                <option id="night_time_1" value="19:30~20:30">19:30~20:30</option>
                                <option id="night_time_2" value="20:30~21:30">20:30~21:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="night_myModal_teacher" class="col-sm-2 control-label">值班老师</label>
                        <div class="col-sm-10">
                            <span class="form-control teacher" disabled="disabled"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="night_myModal_register_person" class="col-sm-2 control-label">登记人</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="register_person" id="night_myModal_register_person" placeholder="个人预约可不填，管理员预约必填">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="night_myModal_remarks" class="col-sm-2 control-label">备注</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="remarks" id="night_myModal_remarks" placeholder="请填写咨询方向以及简要情况说明,管理员填写其他备注">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default reserve_button">预约</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/date.js" type="text/javascript"></script>
<script>
    $(function() {
        $('.table').on("click", "button", function () {
            $('#morning_myModal .modal-body .teacher').empty().text($(this).text());
            $('#full-width').modal();
        });

        $('.table').on("click", "button", function () {
            $('#afternoon_myModal .modal-body .teacher').empty().text($(this).text());
            $('#full-width').modal();
        });

        $('.table').on("click", "button", function () {
            $('#night_myModal .modal-body .teacher').empty().text($(this).text());
            $('#full-width').modal();
        });

        $('.table').on("click", "button", function () {
            $('#morning_myModal .modal-body .modal_week').empty().text($('option.page_week').text());
            $('#full-width').modal();
        });

        $('.table').on("click", "button", function () {
            $('#afternoon_myModal .modal-body .modal_week').empty().text($('option.page_week').text());
            $('#full-width').modal();
        });

        $('.table').on("click", "button", function () {
            $('#night_myModal .modal-body .modal_week').empty().text($('option.page_week').text());
            $('#full-width').modal();
        });
    });


    $(function () {
        $('.reserve_form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    message: '姓名填写错误',
                    validators: {
                        notEmpty: {
                            message: '姓名不能为空'
                        }
                    }
                },
                tel: {
                    validators: {
                        notEmpty: {
                            message: '电话不能为空'
                        },
                        stringLength: {
                            min: 11,
                            max: 11,
                            message: '请填写11位手机号码'
                        },
                    }
                },
                remarks: {
                    validators: {
                        notEmpty: {
                            message: '备注不能为空'
                        }
                    }
                }
            }
        });
    });
</script>
<script>

</script>
</body>
</html>