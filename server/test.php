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
$array = $_REQUEST;
$data = $post['data'];

echo $data;
?>