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
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    -->

    <!--網頁標題+LOGO-->
    <title>管理者頁面</title>
    <link rel="icon" href="images/logo/zoo.ico" type="image/logo/x-icon" >
    <!--END網頁標題+LOGO-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> <!--整個網站-->
    <link rel="stylesheet" href="assets/footer.css"><!--頁尾-->
    <link rel="stylesheet" href="assets/carousel.css"> <!--連播圖片-->
    <script src="https://kit.fontawesome.com/ea23884707.js" crossorigin="anonymous"></script> <!--icon-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><!--動畫 功能-->
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->
    <!-- <link rel="stylesheet" href="main.css"> -->

    <style>
        .header-icons a {
          color: #000;
          display: inline-block;
          padding: 10px;
        }
    </style>

    <style>
      table {
        width: 100%;
      }
      table, th, td {
        border-radius: 10px;
        border: 0.5px;
        border-color: #fff;
      }
      td{
        overflow-wrap: break-word;
        max-width: 300px;
      }
      th, td {
        padding: 15px;
      }
      th {
        background-color: #212e57;
        color: #fff;
      }
      /* tr:hover {background-color: #bccbf3;} */
      tr:nth-child(even) {background-color: #e3e3f3;}
    </style>
     
  </head>

  <body>
    
    <header>
      <!--導覽列-->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <!-- 動物園名字+logo-->
          <a class="navbar-brand align-text-middle" href="index.php"><img src="images/logo/zoo.png" width="45px" class="d-inline-block align-text-middle">FAR FAR AWAY ZOO</a>
          <!-- END動物園名字+logo-->

          <!--導覽列細項-->
          <div class="main-menu-wrap">
            <ul class="navbar-nav me-auto">
              <li><a class="nav-link" href="index.php" aria-current="page" >首頁</a></li>
              <li><a class="nav-link" href="animals.php">園區介紹</a></li>
              <li><a class="nav-link" href="tourguide.php">導覽資源</a></li>
              <li><a class="nav-link" href="products.php">周邊商店</a></li>
              <li><a class="nav-link" href="joinus.php">加入我們</a></li>
              <li><a class="nav-link" href="contactus.php">聯絡我們</a></li>
              <li><a class="nav-link" href="elseservice.php">其他服務</a></li>
              <li>
                <div class="header-icons dropdown">
                  <a class="mobile-hide search-bar-icon" href="products.php" style="color: #fff;width: 45px;height: 45px;"><i class="fas fa-shopping-cart"></i></a>
                  <a class="mobile-hide search-bar-icon" href="search.php" style="color: #fff;width: 45px;height: 45px;"><i class="fas fa-search"></i></a>
                  <a class="mobile-hide search-bar-icon dropdown-toggle" href="member.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff; width: 45px; height: 45px;">
                    <i class="fas fa-user"></i> 
                  </a>
                  <!--下拉選單裡ㄉ東西-->
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="login.php">登入會員</a></li>
                    <li><a class="dropdown-item" href="register.php">註冊會員</a></li>
                    <li><a class="dropdown-item" href="member.php">會員專區</a></li>
                    <hr/>
                    <li><a class="dropdown-item" href="login.php">登出</a></li>
                  </ul>
                  <!--END下拉選單裡ㄉ東西-->
                  
                </div>
              </li>
            </ul>
          </div>
          <!--END導覽列細項-->
        </div>
      </nav>
      <!--END導覽列-->

    </header>

    <main>

      <!--==============================================================內                     容=========================================================================================-->
      <!--==============================================================      內          容     =========================================================================================-->
      <!--==============================================================          內  容         =========================================================================================-->
      <div class="container body" style="margin: auto; margin-top: 60px;">
        <h1>管理者頁面</h1>
          
        <!-- 最新消息 -->
        <div class = "container news" style=" margin:auto;  margin-top: 50px; text-align:center; border:3px #cccccc;">

          <!--最新消息導覽列-->
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style=" float: right; margin-right: 20px; margin-bottom: 20px; width: 150px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;">
                  管理動物
                </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false" style=" float: right; margin-right: 20px; margin-bottom: 20px; width: 150px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;">
                管理商品
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" style=" float: right; margin-right: 20px; margin-bottom: 20px; width: 150px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;">
                管理訂單
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact1-tab" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact1" aria-selected="false" style=" float: right; margin-right: 20px; margin-bottom: 20px; width: 150px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;">
                管理遺失物
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact2-tab" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2" aria-selected="false" style=" float: right; margin-right: 20px; margin-bottom: 20px; width: 150px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;">
                查看意見回覆
              </button>
            </li>
          </ul>

          <!--最新消息內容-->
          <div class="tab-content" id="myTabContent" >

            <!--管理動物-->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <a class="btn btn-primary" href="admin-animals-insert.php" style=" float: right; margin-top: 20px;width: 120px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;" >新增動物</a>

              <table style="margin-top: -510px;">
                <tr>
                  <th>名字</th>
                  <th>年齡</th>
                  <th>性別</th>
                  <th>類別</th>
                  <th>資訊</th>
                  <th>圖片</th>
                  <th>修改</th>
                  <th>刪除</th>
                </tr>

                <?php
                  require("DBconnect.php");
                  $SQL="SELECT * FROM animals";
                  if($result=mysqli_query($link,$SQL)){
                      while($row=mysqli_fetch_assoc($result)){
                          echo "<tr>";
                          echo "<td>".$row['a_name']."</td>";
                          echo "<td>".$row['a_age']."</td>";
                          echo "<td>".$row['a_gender']."</td>";
                          echo "<td>".$row['a_type']."</td>";
                          echo "<td>".$row['a_info']."</td>";
                          echo "<td><img src='images/animals/".$row['a_pic']."' width='50%'></td><a href='".$row['a_pic']."'></a>";
                          echo "<td><a href='admin-animals-update.php?a_name=".$row["a_name"]."'>修改</td>";
                          echo "<td><a href='admin-animals-delete.php?a_name=".$row["a_name"]."'>刪除</a></td></br>";
                          echo "</tr>";
                      }  
                  }
                ?>
              </table>

            </div>
            <!--END管理動物-->

            <!--管理商品-->
            <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
              <a class="btn btn-primary" href="admin-product-insert.php" style=" float: right; margin-top: 20px;width: 120px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;" >新增商品</a>

              <table style="margin-top: -80px;">
                <tr>
                  <th>商品名字</th>
                  <th>價錢</th>
                  <th>資訊</th>
                  <th>圖片</th>
                  <th>修改</th>
                  <th>刪除</th>
                </tr>
                <?php
                  require("DBconnect.php");
                  $SQL="SELECT * FROM product";
                  if($result=mysqli_query($link,$SQL)){
                      while($row=mysqli_fetch_assoc($result)){
                          echo "<tr>";
                          echo "<td>".$row['p_name']."</td>";
                          echo "<td>".$row['p_price']."</td>";
                          echo "<td>".$row['p_info']."</td>";
                          echo "<td><img src='images/products/".$row['p_pic']."' width='50%'></td><a href='".$row['p_pic']."'></a>";
                          echo "<td><a href='admin-product-update.php?p_name=".$row["p_name"]."'>修改</td>";
                          echo "<td><a href='admin-product-delete.php?p_name=".$row["p_name"]."'>刪除</a></td></br>";
                          echo "</tr>";
                      }  
                  }
                ?>
              </table>
            </div>
            <!--END 管理商品-->

            <!--管理訂單-->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <table>
                <tr>
                  <th>訂購人名字</th>
                  <th>訂單編號</th>
                  <th>訂單內容</th>
                  <th>狀態</th>
                  <th>寄送地址</th>
                  <th>總金額</th>
                  <th>刪除</th>
                </tr>
                <?php
                  require("DBconnect.php");

                  $SQL="SELECT * FROM place_list";
                  if($result=mysqli_query($link,$SQL)){
                      while($row=mysqli_fetch_assoc($result)){
                          echo "<tr>";
                          $u_id = substr(serialize($row['u_id']),4, strlen(serialize($row['u_id'])));
                          $u_id = str_replace('"',"",$u_id);
                          $SQL="SELECT u_name FROM user WHERE u_id='$u_id'";
                          if(mysqli_query($link,$SQL))
                          {
                            $u_name = substr(serialize($row['u_name']),4, strlen(serialize($row['u_name'])));
                            $u_name = str_replace('"',"",$u_name);
                          }
                          echo "<td>".$u_name."</td>";
                          echo "<td>".$row['list_id']."</td>";
                          $list_id = substr(serialize($row['list_id']),4, strlen(serialize($row['list_id'])));
                          $list_id = str_replace('"',"",$list_id);
                          $SQL="SELECT * FROM product_list WHERE list_id='$list_id'";
                          if(mysqli_query($link,$SQL))
                          {
                            while($row=mysqli_fetch_assoc($result)){
                              echo "<td>商品名稱:".$row['p_pname'];
                              echo "數量:".$row['p_num'];
                              echo "金額:".$row['price']."</td></br>";
                            }
                          }
                          echo "<td>".$row['list_con']."</td>";
                          echo "<td>".$row['list_address']."</td>";
                          echo "<td>".$row['total_price']."</td>";
                          echo "<td><a href='orderUpdate.php?list_id=".$row["list_id"]."'>修改</td>";
                          echo "<td><a href='orderDelete.php?list_id=".$row["list_id"]."'>刪除</a></td></br>";
                          echo "</tr>";
                      }  
                  }
                ?>
              </table>
            </div>
            <!--END管理訂單-->

            <!--管理遺失物-->
            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
              <a class="btn btn-primary" href="admin-missing-insert.php" style=" float: right; margin-top: 20px;width: 120px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;" >新增遺失物</a>
              <table style="margin-top: 40px;">
                <tr>
                  <th>編號</th>
                  <th>名字</th>
                  <th>圖片</th>
                  <th>日期</th>
                  <th>修改</th>
                  <th>刪除</th>
                </tr>
                <?php
                  require("DBconnect.php");
                  $SQL="SELECT * FROM missing";
                  if($result=mysqli_query($link,$SQL)){
                      while($row=mysqli_fetch_assoc($result)){
                          echo "<tr>";
                          echo "<td>".$row['m_No']."</td>";
                          echo "<td>".$row['m_name']."</td>";
                          echo "<td>".$row['m_date']."</td>";
                          echo "<td><img src='images/else/".$row['m_pic']."' width='100%'></td><a href='".$row['m_pic']."'></a>";
                          echo "<td><a href='admin-missing-update.php?m_No=".$row["m_No"]."'>修改</td>";
                          echo "<td><a href='admin-missing-delete.php?m_No=".$row["m_No"]."'>刪除</a></td></br>";
                          echo "</tr>";
                      }  
                  }
                ?>
              </table>
            </div>
            <!--END遺失物-->

            <!--查看意見回復-->
            <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
              <table>
                <tr>
                  <th>姓名</th>
                  <th>電子信箱</th>
                  <th>訊息</th>
                </tr>
                <?php
                  require("DBconnect.php");
                  $SQL="SELECT * FROM contact";
                  if($result=mysqli_query($link,$SQL)){
                      while($row=mysqli_fetch_assoc($result)){
                          echo "<tr>";
                          echo "<td>".$row['u_name']."</td>";
                          echo "<td>".$row['u_email']."</td>";
                          echo "<td>".$row['message']."</td>";
                          echo "</tr>";
                      }  
                  }
                ?>
              </table>
            </div>
            <!--END查看意見回復-->

          </div>
        </div>

      </div>

      <!--==============================================================END內                     容END=========================================================================================-->
      <!--==============================================================END      內          容     END=========================================================================================-->
      <!--==============================================================END          內  容         END=========================================================================================-->

      </br></br></br>
      
      <!-- footer -->
      <div class="footer-area">
        <div class="container">
          <div class="row">

            <!--About us-->
            <div class="col-lg-3 col-md-6">
              <div class="footer-box about-widget">
                  <h2 class="widget-title">About us</h2>
                  <p>遠的要命動物園，你一生的摯愛！</p>
                  <p>找工作，遠的要命動物園！</p>
                  <p>找伴侶，遠的要命動物園！</p>
                  <p>找小孩，遠的要命動物園！</p>
                  <p>力量人，我的超人！</p>
              </div>
            </div>
            <!--END About us-->
            
            <!--Get in Touch-->
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        <li>地址：火星繞101圈往右走3步到</li>
                        <li>MAIL：iting@nuk.edu.tw</li>
                        <li>TEL：07-591-9328</li>
                    </ul>
                </div>
            </div>
            <!--END Get in Touch-->

            <!--Pages-->
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <ul>
                        <li><a href="index.html">首頁</a></li>
                        <li><a href="animals.html">園區介紹</a></li>
                        <li><a href="tourguide.html">導覽資源</a></li>
                        <li><a href="products.html">周邊商店</a></li>
                        <li><a href="member.html">會員專區</a></li>
                        <li><a href="joinus.html">加入我們</a></li>
                        <li><a href="contactus.html">聯絡我們</a></li>
                        <li><a href="elseservice.html">其他服務</a></li>
                    </ul>
                </div>
            </div>
            <!--END Pages-->

            <!--Mail-->
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Mail</h2>
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
            <!--END Mail-->
          </div>
        </div>
      </div>

      <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2022 - <a href="index.html">Pong-Pa</a>,  All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/ihsien.ting"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/?lang=zh-Hant"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/derrick1978/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://discord.gg/mAhV8kq"><i class="fab fa-discord"></i></a></li>
                            <li><a href="https://www.youtube.com/c/%E7%B5%B1%E7%A5%9E%E5%A4%A7%E6%88%B2%E9%99%A2"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--END Footer -->
    </main>

  </body>
</html>
