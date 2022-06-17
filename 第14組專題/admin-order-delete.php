<?php
session_start();
if($_SESSION["Admin"]!="Yes"){
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
$list_id=$_GET["list_id"];
$SQL="DELETE FROM place_list WHERE list_id='$list_id'";
if(mysqli_query($link, $SQL)){
    $SQL="DELETE FROM product_list WHERE list_id='$list_id'";
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('刪除成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}
?>