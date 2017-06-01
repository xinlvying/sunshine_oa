<?php
header("Content-type: text/html; charset=utf-8");
require_once "DB.class.php";
$db = new DB();

session_start();
if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $sql = "select * from navbar WHERE nav_login is not null ORDER BY nav_id ASC ";
    $result = $db->myQuery($sql);
}
else
{
    $sql = "select * from navbar WHERE nav_unlogin is not null ORDER BY nav_id ASC ";
    $result = $db->myQuery($sql);
}
//var_dump(isset($_SESSION['username']));
?>