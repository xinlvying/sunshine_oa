<?php
header("Content-type: text/html; charset=utf-8");
require_once "DB.class.php";
$post = $_POST;

//清除空白符号
foreach ($post as $key => $value)
{
    $post[$key] = trim($value);
}

$db = new DB();

//获取前台数据
$user_name = $db->mysqli_entities_fix_string($post['username']);
$pass_word = md5($db->mysqli_entities_fix_string($post['password']));

//构造SQL语句
$sql = "select pass_word from admin where user_name = '$user_name' and pass_word = '$pass_word'";

//执行SQL语句
$result = $db->myQuery($sql);

if (!$result) die("数据库查询失败！");
elseif (mysqli_num_rows($result))
{
    //解析结果
    $token = mysqli_fetch_row($result);
    //返回信息至前端
    if ($token[0] == $pass_word)
    {
        session_start();
        $_SESSION['username'] = $user_name;
        $_SESSION['password'] = $pass_word;
        echo "OK";
    }
    else echo "NO";
}
else die("无效用户！");
//关闭数据库连接
$db->dbClose();
?>
