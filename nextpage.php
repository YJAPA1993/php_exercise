<head>
</head>
<body>
    <?php
        $uname=$_POST["uname"];
        $utel=$_POST["utel"];
        $uemail=$_POST["uemail"];
        $ubirthday=$_POST["ubirthday"];
        $ugender=$_POST["ugender"];
        $ufood=$_POST["ufood"];
        $ufoodsize=count($ufood);
        //$ufoods=implode(",",$ufood);
            
        echo "<h1><b>墾丁三日遊</b></h1>";
        echo "<b>HI ! </b>".$uname."<br/>"; //用點來連接字串
        echo "<b>Your phonenumber is </b>".$utel."<br/>";
        echo "<b>Your email is </b>".$uemail."<br/>";
        echo "<b>Your birthday is </b>".$ubirthday."<br/>";
        if ($ugender=='M'){
            echo "<b>Your gender is</b> MAN<br/>";
        }elseif($ugender=="F"){
            echo "<b>Your gender is</b> WOMAN<br/>";
        }else{
            echo "<b>Your gender is</b> SERECT<br/>";
        }
        //echo "<b>food: </b>".$ufoods;

        echo "<b>Your food is </b>";
        for($i=0;$i<$ufoodsize;$i++){
            echo $ufood[$i];
            if ($i != $ufoodsize-1 ){
                echo",";
            }
        }

        

        //textarea    
        //file
    ?>
    <form action="login.php" method="post">
            <input type="submit" value="Submit">
    </form>
</body>
