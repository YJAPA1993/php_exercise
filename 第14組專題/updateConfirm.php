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
$updateWeb=$_POST["update"];
//取得副檔名
$pathpart = pathinfo($_FILES['photo']['name']);
$extname = $pathpart['extension'];
//echo $extname;

$now=time();
//產生新檔案名稱
$finalPhoto = "Photo_".time().".".$extname;


if($updateWeb==1){
    $currentAnimal = $_POST["name"];
    $a_name=$_POST["a_name"];
    $a_age=$_POST["a_age"];
    $a_gender=$_POST["a_gender"];
    $a_type=$_POST["a_type"];
    $a_info=$_POST["a_info"];

    $SQL="UPDATE animals SET a_name='$a_name',a_age='$a_age',a_gender='$a_gender',a_pic='$finalPhoto',a_type='$a_type',a_info='$a_info' WHERE a_name='$currentAnimal'";
    if(copy($_FILES["photo"]["tmp_name"],'images/animals/'.$finalPhoto)){
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }}
}
else if($updateWeb==2)
{
    $m_No = $_POST["m_No"];
    $m_name=$_POST['m_name'];
    $m_date=$_POST['m_date'];

    $SQL="UPDATE missing SET m_name='$m_name',m_pic='$finalPhoto',m_date='$m_date' WHERE m_No='$m_No'";
    if(copy($_FILES["photo"]["tmp_name"],'images/else/'.$finalPhoto)){
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }}
}
else if($updateWeb==3)
{
    $currentProduct = $_POST["p_name"];
    $p_name=$_POST['p_name'];
    $p_price=$_POST['p_price'];
    $p_info=$_POST['p_info'];

    $SQL="UPDATE product SET p_name='$p_name',p_price='$p_price',p_pic='$finalPhoto',p_info='$p_info' WHERE p_name='$currentProduct'";
    if(copy($_FILES["photo"]["tmp_name"],'images/products/'.$finalPhoto)){
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }}
}
else if($updateWeb==4)
{
    $currentlist = $_POST["list_id"];
    $list_con=$_POST['list_con'];

    $SQL="UPDATE place_list SET list_con='$list_con' WHERE list_id='$currentlist'";
    
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    }
}
?>