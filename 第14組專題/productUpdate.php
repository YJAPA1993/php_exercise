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
$p_name=$_GET["p_name"];

$SQL="SELECT * FROM product WHERE p_name='$p_name'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $p_name=$row['p_name'];
        $p_price=$row['p_price'];
        $p_pic=$row['p_pic'];
        $p_info=$row['p_info'];
    }
}
?>
<h1>商品資料更新</h1>

<form action="updateconfirm.php" method="post">
Product name: <?php echo $p_name;?></br>
<input type="hidden" name ="name" value='<?php echo $p_name;?>'>
<input type="hidden" name ="update" value='3'>
Price:<input type="text" name="p_price" value='<?php echo $p_price;?>'></br>
Info:<input type="text" name="p_info" value='<?php echo $p_info;?>'></br>
<input type="file" name="photo" accept="image/*"></br>
<input type="submit" value="確認變更"></br>
</form>