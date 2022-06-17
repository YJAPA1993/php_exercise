<?php
session_start();
require("DBconnect.php");
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
$list_id=$_GET["list_id"];

$SQL="SELECT list_con FROM place_list WHERE list_id='$list_id'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $list_con=$row['list_con'];
    }
}
?>