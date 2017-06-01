<?php

class DB{
    private  $host = "localhost";
    private  $username = "xin";
    private  $password = "1018";
    private  $database = "sunshine_oa";
    private  $conn;

    function __construct(){
        $this->dbConnect();
    }

    function dbConnect(){
        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->database)
        or die ("connection MySQL failed!");
        mysqli_query("set names utf8");
    }

    function dbClose(){
        mysqli_close($this->conn);
    }

    //对mysql_query()、mysql_fetch_array()、mysql_num_rows()函数进行封装
    function myQuery($sql){
        return mysqli_query($this->conn,$sql);
    }

    function myArray($result){
        return mysqli_fetch_row($result);
    }

    function rows($result){
        return mysqli_num_rows($result);
    }

    //净化变量函数,防止SQL注入,XSS攻击
    function mysqli_entities_fix_string($string)
    {
        if (get_magic_quotes_gpc())
            $string = stripslashes($string);
        $string = mysqli_real_escape_string($this->conn,$string);
        return htmlentities($string);
    }
}

?>
