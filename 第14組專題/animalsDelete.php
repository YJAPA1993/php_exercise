<?php
session_start();
if($_SESSION["Admin"]=="No"){
    echo "非法進入系統";
    echo "<a href='login.php'>登出系統</a>";
    header("Location: /login.php");
    exit();    
}
else
{
    echo "<a href='login.php'>logout</a>";
}
require("DBconnect.php");
$a_name=$_GET["a_name"];
$SQL="DELETE FROM animals WHERE a_name='$a_name'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}
?>