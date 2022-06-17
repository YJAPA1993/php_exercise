<?php
session_start();
    if($_SESSION["login"]=="No"){
        echo "非法進入系統";
        echo "<a href='login.php'>登出系統</a>";
        header("Location /login.php");
        exit();    
    }
    else
    {
        echo "<a href='login.php'>logout</a>";
    }
?>
<form name="list" action="cart.php" method="POST" enctype="multipart/form-data">
<li>報名表單:<br/>
<table>
    <tr>
        <td>姓名: <input type="text" name="name" size="10"><br/></td>
    </tr>
    <tr>
        <td>手機號碼: <input type="text" name="phone" size="10"><br/></td>
    </tr>
    <tr>
        <td>電子信箱:<input type="email" name="email" size="10"><br/></td>
    </tr>
    <tr>
        <td>地址:<input type="address" name="address" size="10"><br/></td>
    </tr>
    <tr>
        <td>上傳檔案<input type="file" name="uphoto"></td>
    </tr>
</table>
