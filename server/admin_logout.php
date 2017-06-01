<?php
session_start();
if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    session_destroy();
    $url = "../index.php";
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
}
?>