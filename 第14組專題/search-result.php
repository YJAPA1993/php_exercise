<?php
echo "hi";
$keyword=$_POST["keyword"];
// 如果有搜尋文字顯示搜尋結果
        // Connect to the database
    require_once('DBconnect.php');
        
        // Escape the search string and trim
        // all whitespace
    $searchString = mysqli_real_escape_string($link, trim(htmlentities($_POST['keyword'])));
    $s = "%$searchString%";
    echo $s;
    //尋找動物頁面相關關鍵字
    $sql = "SELECT * FROM animals WHERE a_name LIKE '$s' OR a_gender LIKE '$s' OR a_type LIKE '$s' OR a_info LIKE '$s'";
    if($result=mysqli_query($link, $sql)){
        // 搜尋有資料時顯示搜尋結果
        echo "查詢成功";
        //echo "<meta http-equiv='Refresh' content='0'; url='animal.html'>";
    }
    else{
        // 搜尋無資料時顯示「查無資料」
        echo "查無資料";
    }

    //商品頁面相關關鍵字
    $sql = "SELECT * FROM product WHERE p_name LIKE '$s' OR p_info LIKE '$s'";
    if($result=mysqli_query($link, $sql)){
        // 搜尋有資料時顯示搜尋結果
        //echo "<meta http-equiv='Refresh' content='0'; url='products.html'>";
    }
    else{
        // 搜尋無資料時顯示「查無資料」
        echo "查無資料";
    }

    $sql = "SELECT * FROM missing WHERE m_name LIKE '$s' OR m_date LIKE '$s'";
    if($result=mysqli_query($link, $sql)){
        // 搜尋有資料時顯示搜尋結果
        //echo "<meta http-equiv='Refresh' content='0'; url='missing.html'>";
    }
    else{ 
        // 搜尋無資料時顯示「查無資料」
        echo "查無資料";
    }
?>