$(document).ready(function () {
    $('#login_btn').click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        if (username == "") {
            alert("用户名不能为空！");
        }
        else if (password == "") {
            alert("密码不能为空！");
        }
        else {
            $.ajax({
                url: "./server/admin_login_check.php",
                type: "POST",
                dataType: "TEXT",
                data: {username: username, password: password},
                success: function (data) {
                    if (data.trim()=="OK") {
                        window.location.href = "./admin_panel.php";
                    }
                    else {
                        alert('用户名或密码错误');
                    }
                }
            });
        }
    })
});
