<?php
header("Content-type: text/html; charset=utf-8");

require_once "DB.class.php";

$post = $_POST;

//清除一些空白符号
foreach ($post as $key => $value){
    $post[$key] = trim($value);
}
//连接数据库
$db = new DB();

//取得表单中的值
$name = $db->mysqli_entities_fix_string($post['name']);
$sex = $db->mysqli_entities_fix_string($post['sex']);
$tel = $db->mysqli_entities_fix_string($post['tel']);
$week = $db->mysqli_entities_fix_string($post['week']);
$time = $db->mysqli_entities_fix_string($post['time']);
$remarks = $db->mysqli_entities_fix_string($post['remarks']);
$register_person = $db->mysqli_entities_fix_string($post['register_person']);
$tem_time = time();
$register_time = date("Y-m-d",$tem_time);


//构造SQL语句
$sqlstr = "INSERT INTO book_register(re_name,re_tel,re_sex,detail_time,remarks,register_person,register_time)VALUES('$name','$tel','$sex','$time','$remarks','$register_person','$register_time')";

//执行SQL语句
$result = $db->myQuery($sqlstr) or die("预约登记失败！");


if ($result){
    header("refresh:1;url=../book_success.php");
}
else{
    echo "预约失败，请重新预约！";
}

//关闭数据库连接
$db->dbClose();
?>
