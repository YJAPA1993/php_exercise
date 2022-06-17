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
    <title>導覽資源</title>
    <link rel="icon" href="images/logo/zoo.ico" type="image/logo/x-icon" >
    <!--END網頁標題+LOGO-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> <!--整個網站-->
    <link rel="stylesheet" href="assets/footer.css"><!--頁尾-->
    <link rel="stylesheet" href="assets/carousel.css"> <!--連播圖片-->
    <script src="https://kit.fontawesome.com/ea23884707.js" crossorigin="anonymous"></script> <!--icon-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><!--動畫 功能-->
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

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
          <a class="navbar-brand align-text-middle" href="index.php"><img src="images/logo/zoo.png" width="45px" class="d-inline-block align-text-middle">FAR FAR AWAY ZOO</a>
          <!-- END動物園名字+logo-->

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

      <!--翻動圖片-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">

          <!--圖片-->
          <div class="carousel-item active">
            <a href="index.php">
              <img src="images/scenery photo/1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-start">
                <h1>太久沒接近大自然？</h1>
                <p>那就來遠的要命王國吧！&nbsp</p>
              </div>
            </a>
          </div>
          <!--END圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <a href="products.php">
              <img src="images/scenery photo/2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-start">
                <h1>想要這些可愛的動物娃娃嗎？</h1>
                <p>現在就可以線上選購唷！</p>
              </div>
            </a>
          </div>
          <!--END圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <a href="animals.php">
              <img src="images/scenery photo/3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-start">
                <h1>這裡有好多可愛動物唷！</h1>
                <p>一起來玩吧！</p>
              </div>
            </a>
          </div>
          <!--圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <a href="joinus.php">
              <img src="images/scenery photo/4.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-start">
                <h1>想要認養動物嗎？</h1>
                <p>現在就來了解如何認養吧！</p>
              </div>
            </a>
          </div>
          <!--圖片-->

          <!--圖片-->
          <div class="carousel-item">
            <a href="https://youtu.be/qrM-PDl0uVg">
              <img src="images/scenery photo/5.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-start">
                <h1>想要期末All Pass嗎？</h1>
                    <p>點擊查看如何All Pass！</p>
              </div>
            </a>
          </div>
          <!--圖片-->
        </div>

        <!--翻動圖片的左右箭頭-->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-shown">上一頁</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="visually-shown">下一頁</span>
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
            <li class="breadcrumb-item active" aria-current="page">導覽資源</li>
          </ol>
        </nav>
        <!-- 麵包削結束-->

        <!--導覽資源-->
        <div>
          <h1>導覽資源</h1>

          <!--導覽資源分頁-->
          <div style=" margin:auto; text-align:center; width:1000px; border:3px #cccccc">

            <!--導覽列-->
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">

              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style=" float: right; margin-top: 20px; margin-bottom: 30px; margin-right: 20px; width: 180px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #2b0a0a;background: #c23b29; font-size: 16px; font-weight: 400; color: #fff;">租借導覽器材</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style=" float: right; margin-top: 20px; margin-bottom: 30px; margin-right: 20px; width: 180px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #2b0a0a;background: #c23b29; font-size: 16px; font-weight: 400; color: #fff;">預約團體導覽</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" style=" float: right; margin-top: 20px; margin-bottom: 30px; margin-right: 20px; width: 180px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #2b0a0a;background: #c23b29; font-size: 16px; font-weight: 400; color: #fff;">導覽資訊</button>
              </li>

            </ul>

            <!--標籤內容-->
            <div class="tab-content" id="myTabContent" >

              <!--標籤內容-租借導覽器材-->
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>租借導覽器材辦法</b>
                  </h4>
                  <div class="content" style="height: 300px; width: 88%; margin: auto; text-align: center; padding: 50px 100px; text-align: start;">
                    <ul>
                      <li>借用時間：園區開放日23:00至06:00。</li>
                      <li>歸還時間：借用當天05:00以前。</li>
                      <li>借用辦法：免費借用，須押證件，若無證件押金1000元 (歸還時退還證件或押金)。</li>
                      <li>單日可租借量：50台。</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--END內容-租借導覽器材-->

              <!--標籤內容-預約團體導覽-->
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>預約團體導覽</b>
                  </h4>
                  <div class="content" style="height: 300px; width: 88%; margin: auto; text-align: center; padding: 50px 150px; text-align: start;">
                    <ul>
                      <li>導覽對象：國小以上學生及社會團體</li>
                      <li>導覽人數：20人以上</li>
                      <li>導覽時間：約1.5小時</li>
                      <li>申請時限：來園前10-60日提出</li>
                      <li>申請方法：
                        <ol type = "1">
                          <li>線上預約&nbsp<i class="fa-solid fa-arrow-right-long"></i>&nbsp下載<a href="/assets/file/reserve_group_tourguide.docx" download="reserve_group_tourguide.docx">申請表格&nbsp<i class="fa-solid fa-file-arrow-down"></i></a>，寄至iting@nuk.edu.tw</li>
                          <li>電話預約：07-591-9328</li>
                        </ol>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--END內容-->

              <!--內容-->
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>定時導覽資訊</b>
                  </h4>
                  <div class="content" style="height: 300px; width: 88%; margin: auto; text-align: center; padding: 50px 80px; text-align: start;">
                    <ul>
                      <li>時間：
                        <ol type="1">
                            <li>周二～周六：上午10：30、下午14：00</li>
                            <li>周日上午10：30、下午14：30</li>
                        </ol>
                      <li>地點：於企鵝館集合。</li>
                      <li>導覽時間：約1.5小時</li>
                      <li>參加方法：至服務台報名&nbsp<i class="fa-solid fa-user-plus"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--END內容-->


            </div>
          </div>

        </div>
        <!--END聯絡我們-->
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
