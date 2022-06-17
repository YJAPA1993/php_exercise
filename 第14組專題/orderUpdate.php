<?php
session_start();
require("DBconnect.php");
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
$list_id=$_GET["list_id"];

$SQL="SELECT list_con FROM place_list WHERE list_id='$list_id'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $list_con=$row['list_con'];
    }
}
?>
<h1>訂單資料更新</h1>

<form action="updateconfirm.php" method="post">
Missing stuff: <?php echo $m_name;?></br>
<input type="hidden" name ="name" value='<?php echo $m_No;?>'>
<input type="hidden" name ="update" value='4'>
Date:<input type="text" name="m_date" value='<?php echo $m_date;?>'></br>
<input type="file" name="photo" accept="image/*"></br>
<input type="submit" value="確認變更"></br>
</form>