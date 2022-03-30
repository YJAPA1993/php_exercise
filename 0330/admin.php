<?php
    session_start();
?>

<?php
    if ( isset($_SESSION['login']) ){
        if ( $_SESSION['login'] == "Yes" ){
            echo "<a href = 'logout.php'>登出系統</a>";
        }else{
            echo "非法進入系統";
            echo "<a href = 'logout.php'>回登入頁</a>";
            exit();
        }
    }else{
        echo "非法進入系統";
        echo "<a href = 'logout.php'>回登入頁</a>";
        exit();
    }
?>
<html>
    <head>
        <title>Admin</title>
    </head>

    <body>
        <center>Welcome to Admin!</center>
    </body>
</html>
