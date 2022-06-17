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
    <title>FAR FAR AWAY ZOO</title>
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
      
      <!-- 最新消息 -->
      <div class = "container news" style="margin:auto;text-align:center;width:1000px;height:230px;border:3px #cccccc; border-style:ridge;">

        <!--最新消息導覽列-->
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">公告</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">應徵資訊</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact1-tab" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact1" aria-selected="false">優惠資訊</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact2-tab" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2" aria-selected="false">認養訊息</button>
          </li>
        </ul>

        <!--最新消息內容-->
        <div class="tab-content" id="myTabContent" >
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
            <!--公告-->
            <div class="list-group">
              <a href="animals.php" class="list-group-item list-group-item-action" aria-current="true">【動物】長毛大猩猩入園啦~</a>
              <a href="products.php" class="list-group-item list-group-item-action">【商店】可愛的猴子娃娃上線了，現在就來選購！</a>
              <a href="tourguide.php" class="list-group-item list-group-item-action">【導覽】6月6日團體導覽暫停一天</a>
              <a href="joinus.php" class="list-group-item list-group-item-action">【認養】交個"猩"朋友認養計畫開始啦</a>
            </div>
          </div>
          <!--END公告-->
          <!--應徵資訊-->
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <a href="joinus.php" class="list-group-item list-group-item-action " aria-current="true">【應徵】招募一名有熱忱的動物餵養員</a>
            <a href="joinus.php" class="list-group-item list-group-item-action">【應徵】招募一顆新鮮的肝，等的就是你!</a>
            <a href="joinus.php" class="list-group-item list-group-item-action">【應徵】尋找一日女友，163/60</a>
          </div>
          <!--END應徵資訊-->
          <!--優惠資訊-->
          <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
            <a href="products.php" class="list-group-item list-group-item-action" aria-current="true">【商店】現在全館滿千送百、滿千免運</a>
            <a href="products.php" class="list-group-item list-group-item-action">【商店】買再多也不怕搬不回家，園內現在提供貨運的服務</a>
            <a href="products.php" class="list-group-item list-group-item-action">【商店】想要獲得力量人公仔嗎，點進來我就跟你說哪裡可以買</a>
          </div>
          <!--END優惠資訊-->
          <!--認養資訊-->
          <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
            <a href="joinus-animalfeed-1.php" class="list-group-item list-group-item-action" aria-current="true">【認養】平時孤單寂寞一個人嗎？來交個"猩"朋友吧 ~</a>
            <a href="joinus-animalfeed-2.php" class="list-group-item list-group-item-action">【認養】想跟瑪爾濟斯當麻吉麻？現在就有辦法囉！</a>
            <a href="joinus-animalfeed-3.php" class="list-group-item list-group-item-action">【認養】每天晚上陪伴你的直播主，現在就來斗內他ㄅ！</a>
          </div>
          <!--END應徵資訊-->

        </div>
      </div>

      <!--商品-->
      <!-- Section-->
      <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
              
            <!--單個商品-->
            <div class="col mb-5">
              <div class="card h-100">
                
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Hot</div>
                
                <!-- Product image-->
                <img class="card-img-top" src="images/products/3.jpg" alt="..." />
                
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">

                    <!-- Product name-->
                    <h5 class="fw-bolder">羊妹妹</h5>

                    <!-- Product price-->
                    $500

                  </div>
                </div>
                
                <!-- 商品查看按鈕-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="products.php">查看</a></div>
                </div>
                
              </div>
            </div>
            <!--END單個商品-->


            <!--單個商品-->
            <div class="col mb-5">
              <div class="card h-100">
                
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Hot</div>
                
                <!-- Product image-->
                <img class="card-img-top" src="images/products/1.jpg" alt="..." />
                
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">

                    <!-- Product name-->
                    <h5 class="fw-bolder">冷凍G</h5>

                    <!-- Product price-->
                    $100

                  </div>
                </div>
                
                <!-- 商品查看按鈕-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="products.php">查看</a></div>
                </div>
                
              </div>
            </div>
            <!--END單個商品--><!--單個商品-->
            <div class="col mb-5">
              <div class="card h-100">
                
                <!-- Product image-->
                <img class="card-img-top" src="images/products/2.png" alt="..." />
                
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">

                    <!-- Product name-->
                    <h5 class="fw-bolder">猴子娃娃</h5>

                    <!-- Product price-->
                    $400

                  </div>
                </div>
                
                <!-- 商品查看按鈕-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="products.php">查看</a></div>
                </div>
                
              </div>
            </div>
            <!--END單個商品-->
               
          </div>
        </div>
      </section>
      <!--END商品-->

      <!--影片-->
      <div class="container video" style="margin:auto;text-align:center; margin-bottom: 50px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-r8VnoCgwAs?start=77" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <!--END影片-->

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
                        <li><i class="fa-duotone fa-location-dot"></i>地址：火星繞101圈往右走3步到</li>
                        <li><i class="fa-duotone fa-envelope"></i>MAIL：iting@nuk.edu.tw</li>
                        <li><i class="fa-duotone fa-circle-phone"></i>TEL：07-591-9328</li>
                    </ul>
                </div>
            </div>
            <!--END Get in Touch-->

            <!--Pages-->
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <ul>
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="animals.php">園區介紹</a></li>
                        <li><a href="tourguide.php">導覽資源</a></li>
                        <li><a href="products.php">周邊商店</a></li>
                        <li><a href="member.php">會員專區</a></li>
                        <li><a href="joinus.php">加入我們</a></li>
                        <li><a href="contactus.php">聯絡我們</a></li>
                        <li><a href="elseservice.php">其他服務</a></li>
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
                    <p>Copyrights &copy; 2022 - <a href="index.php">Pong-Pa</a>,  All Rights Reserved.</p>
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
