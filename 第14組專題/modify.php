<?php
require_once('DBconnect.php');
if($_SESSION["login"]=="No"){
    echo "非法進入系統";
    echo "<a href='login.php'>登出系統</a>";
    header("Location /login.php");
    exit();    
}
else if($_SESSION["Admin"]=="No"){
    echo "非法進入系統";
    echo "<a href='login.php'>登出系統</a>";
    header("Location /login.php");
    exit();    
}
else
{
    echo "<a href='login.php'>logout</a>";
}
$u_id=$_SESSION["u_id"];

$SQL="SELECT * FROM user WHERE u_id='$u_id'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $uName=$row['name'];
        $uPwd=$row['pwd'];
        $uRole=$row['role'];
    }
}

$mname=$_POST["mname"];
$memail=$_POST["memail"];
$msex=$_POST["msex"];
$mbirth=$_POST["mbirth"];
$mphone=$_POST["mphone"];
$pathpart = pathinfo($_FILES['photo']['name']);
$extname = $pathpart['extension'];
//echo $extname;

$now=time();
//產生新檔案名稱
$finalPhoto = "Photo_".time().".".$extname; //避免多個檔案同名(+username)

$SQL="UPDATE user SET u_name='$mname',u_gender='$msex',u_birth='$mbirth',u_email='$memail',u_phone='$mphone' WHERE u_id='$u_id'";

//上傳檔案
if(mysqli_query($link, $SQL)){
    echo "資料更新成功";
}else{
    echo "資料更新失敗";
}
 ?>