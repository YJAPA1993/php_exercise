<?php
    session_start(); 
    require_once('DBconnect.php');
    if($_SESSION["login"]=="No"){
        echo "非法進入系統";
        echo "<a href='login.php'>登出系統</a>";
        header("Location: /login.php");
        exit();    
    }
    else
    {
        echo "<a href='login.php'>logout</a>";
    }
    echo $_SESSION['list_id'];
    $list_id=$_SESSION['list_id'];
    if($_POST["products"]!=null){
        $products = $_POST["products"];
        $totalPrice = $_POST["totalPrice"];
        $totalQuantity = $_POST["totalQuantity"];
        echo $products.",".$totalPrice.",".$totalQuantity;

        $SQL="INSERT INTO product_list (list_id,p_pname,p_num,price) VALUES ('$list_id','$products','$totalQuantity','$totalPrice')";
        
        if($result=mysqli_query($link, $SQL)){
            echo "資料成功輸入";
        }else{
            echo "錯誤";
        }
    }
    
    if($_POST["name"]!=null)
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];

        $SQL="SELECT SUM(price) FROM product_list WHERE list_id='$list_id'";
        if($result=mysqli_query($link, $SQL)){
            if($row=mysqli_fetch_assoc($result))
            {
                $total_price=substr(serialize($row[0]),4, strlen(serialize($row[0])));
                $total_price = str_replace('"',"",$total_price);
            }
            else{
                echo '處理錯誤，請重新下訂';
            }
        }
        $u_id = $SESSION['u_id'];
        $SQL="INSERT INTO place_list (u_id,list_id,list_con,list_address,total_price) VALUES ('$u_id','$list_id','訂單成立','$address','$total_price')";   
        if(mysqli_query($link, $SQL)){
            echo "訂單下訂成功!";
        }else{
            echo "錯誤";
        }
    }
?>