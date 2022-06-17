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
    <title>產學合作</title>
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
     
  </head>

  <body>
    
    <header>

      <!--導覽列-->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <!-- 動物園名字+logo-->
          <a class="navbar-brand align-text-middle" href="index.html"><img src="images/logo/zoo.png" width="45px" class="d-inline-block align-text-middle">FAR FAR AWAY ZOO</a>
          <!-- END動物園名字+logo-->

          <!--導覽列細項-->
          <div class="main-menu-wrap">
            <ul class="navbar-nav me-auto">
              <li><a class="nav-link" href="index.html" aria-current="page" >首頁</a></li>
              <li><a class="nav-link" href="animals.html">園區介紹</a></li>
              <li><a class="nav-link" href="tourguide.html">導覽資源</a></li>
              <li><a class="nav-link" href="products.html">周邊商店</a></li>
              <li><a class="nav-link" href="joinus.html">加入我們</a></li>
              <li><a class="nav-link" href="contactus.html">聯絡我們</a></li>
              <li><a class="nav-link" href="elseservice.html">其他服務</a></li>
              <li>
                <div class="header-icons dropdown">
                  <a class="mobile-hide search-bar-icon" href="products.html" style="color: #fff;width: 45px;height: 45px;"><i class="fas fa-shopping-cart"></i></a>
                  <a class="mobile-hide search-bar-icon" href="search.html" style="color: #fff;width: 45px;height: 45px;"><i class="fas fa-search"></i></a>
                  <!-- <a class="mobile-hide search-bar-icon" href="" style="color: #fff;width: 45px;height: 45px;"><i class="fas fa-user"></i></a> -->
                  <a class="mobile-hide search-bar-icon dropdown-toggle" href="member.html" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="member.html" style="color: #fff; width: 45px; height: 45px;">
                    <i class="fas fa-user"></i> 
                  </a>
                  <!--下拉選單裡ㄉ東西-->
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="login.html">登入會員</a></li>
                    <li><a class="dropdown-item" href="register.html">註冊會員</a></li>
                    <li><a class="dropdown-item" href="member.html">會員專區</a></li>
                    <hr/>
                    <li><a class="dropdown-item" href="logout.html">登出</a></li>
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

      <!--翻動圖片-->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <!--翻動圖片下面的小點點(頁數)-->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <!--END翻動圖片下面的小點點(頁數)-->

        <!--翻動圖片每頁內容-->
        <div class="carousel-inner">

          <!--圖片-->
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#45464a"/></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <a href="index.html"><img src="images/scenery photo/1.jpg" class="d-block w-100 h-20" alt=""></a>
                <h1>太久沒接近大自然？</h1>
                <p>那就來遠的要命王國吧！&nbsp</p>
                <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
              </div>
            </div>
          </div>
          <!--END圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#45464a"/></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <a href="products.html"><img src="images/scenery photo/2.jpg" class="d-block w-100 h-20" alt=""></a>
                <h1>想要這些可愛的動物娃娃嗎？</h1>
                <p>現在就可以線上選購唷！</p>
                <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
              </div>
            </div>
          </div>
          <!--END圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#45464a"/></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <a href="animals.html"><img src="images/scenery photo/3.jpg" class="d-block w-100 h-20" alt=""></a>
                <h1>這裡有好多可愛動物唷！</h1>
                <p>一起來玩吧！</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>-->
              </div>
            </div>
          </div>
          <!--END圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#45464a"/></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <a href="joinus.html"><img src="images/scenery photo/4.jpg" class="d-block w-100 h-20" alt=""></a>
                <h1>想要認養動物嗎？</h1>
                <p>現在就來了解如何認養吧！</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>-->
              </div>
            </div>
          </div>
          <!--END圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#45464a"/></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <a href="https://youtu.be/-r8VnoCgwAs"><img src="images/scenery photo/5.jpg" class="d-block w-100 h-20" alt=""></a>
                <h1>想要期末All Pass嗎？</h1>
                <p>點擊查看如何All Pass！</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>-->
              </div>
            </div>
          </div>
          <!--END圖片-->
        </div>
        <!--END翻動圖片每頁內容-->

        <!--翻動圖片的左右箭頭-->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-shown">上一頁</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="visually-shown">下一頁</span> <!--hidden-->
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        <!--END翻動圖片的左右箭頭-->
      </div>
      <!--END翻動圖片-->


      <!--==============================================================內                     容=========================================================================================-->
      <!--==============================================================      內          容     =========================================================================================-->
      <!--==============================================================          內  容         =========================================================================================-->
      <div class="container body" style="margin: auto;">

        <!-- 麵包削-->    
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
            <li class="breadcrumb-item"><a href="joinus.php">加入我們</a></li>
            <li class="breadcrumb-item active" aria-current="page">產學合作</li>
          </ol>
        </nav>
        <!-- 麵包削結束-->

        <!--認養計畫-->
        <div>
          <h1>產學合作</h1>
          <div style="border-style: groove; margin-bottom: 50px;">
            <div class="content" style=" width: 88%; margin: auto; text-align: center; margin: auto; text-align: start;">
              <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                <b>產學合作計畫</b>
              </h4>
              <div class="content" style="  margin: auto; text-align: center; padding: 1px 100px; text-align: start;">
                <ul style="margin: 20px;">
                  <li>計畫主題 ： 前瞻技術產學合作計畫</li>
                  <li>發布日期 ： 2022/02/12</li>
                  <li>計畫內容 ： 整座山都是動物的家園</br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 一起動動手動動腦🙌🧠</br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 為金剛猩猩製作行為豐富化道具</br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 看看大家製作的創意麻布袋&水帶骰子 還有麻繩編織袋</br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 兼具時尚與實用  對動物的愛都滿出來啦~~🥰 </br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 行豐禮物給金剛~保育知識給自己</br>
                  </li><li>檔案下載 ： 下載<a href="/assets/file/reserve_group_tourguide.docx" download="reserve_group_tourguide.docx">產學合作計畫文件&nbsp<i class="fa-solid fa-file-arrow-down"></i></a></li>
                  <div style="text-align: right; color: gray;">更新時間 ： 2022/02/15</div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--==============================================================END內                     容END=========================================================================================-->
      <!--==============================================================END      內          容     END=========================================================================================-->
      <!--==============================================================END          內  容         END=========================================================================================-->


      
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
