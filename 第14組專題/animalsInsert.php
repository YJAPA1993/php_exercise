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
 require_once('DBconnect.php');
 $a_name=$_POST["a_name"];
 $a_age=$_POST["a_age"];
 $a_gender=$_POST["a_gender"];
//取得副檔名
$pathpart = pathinfo($_FILES['photo']['name']);
$extname = $pathpart['extension'];
//echo $extname;

$now=time();
//產生新檔案名稱
$finalPhoto = "Photo_".time().".".$extname;
 $a_type=$_POST["a_type"];
 $a_info=$_POST["a_info"];
 $SQL="INSERT INTO animals(a_name,a_age,a_gender,a_pic,a_type,a_info) VALUES ('$a_name','$a_age','$a_gender','$finalPhoto','$a_type','$a_info')";
 if(copy($_FILES["photo"]["tmp_name"],'images/animals/'.$finalPhoto)){
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
}
?>