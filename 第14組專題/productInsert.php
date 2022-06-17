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
 $p_name=$_POST["p_name"];
 $p_price=$_POST["p_price"];
 $p_info=$_POST["p_info"];
//取得副檔名
$pathpart = pathinfo($_FILES['photo']['name']);
$extname = $pathpart['extension'];
//echo $extname;

$now=time();
//產生新檔案名稱
$finalPhoto = "Photo_".time().".".$extname;

 $SQL="INSERT INTO product(p_name,p_price,p_pic,p_info) VALUES ('$p_name','$p_price','$finalPhoto','$p_info')";
 if(copy($_FILES["photo"]["tmp_name"],'images/products/'.$finalPhoto)){
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