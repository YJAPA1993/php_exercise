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
$m_name=$_POST["m_name"];
//取得副檔名
$pathpart = pathinfo($_FILES['photo']['name']);
$extname = $pathpart['extension'];
//echo $extname;
date_default_timezone_set("Asia/Taipei");
$m_date = date("m-d-Y H:i:s",time());
$now=time();
//產生新檔案名稱
$finalPhoto = "Photo_".time().".".$extname;
$SQL="INSERT INTO missing(m_name,m_pic,m_date) VALUES ('$m_name','$finalPhoto','$m_date')";

if(copy($_FILES["photo"]["tmp_name"],'images/else/'.$finalPhoto)){
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('新增成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('新增失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }
}else{
        echo "<script type='text/javascript'>";
            echo "alert('照片上傳失敗')";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0'; url='admin.php'>";
    }
?>