<?php 
 require_once('DBconnect.php');
 $name=$_POST["name"];
 $email=$_POST["email"];
 $comment=$_POST["comment"];
$comment=strip_tags($comment);
$comment=nl2br($comment);
 $SQL="INSERT INTO contact(u_name,u_email,message) VALUES ('$name','$email','$comment')";
    if(mysqli_query($link, $SQL)){
        echo "傳送成功";
        header("Location: /contactus.php");
    }else{
        echo "傳送失敗";
    }
?>