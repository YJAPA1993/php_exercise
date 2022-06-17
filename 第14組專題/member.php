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
    <title>會員專區</title>
    <link rel="icon" href="images/logo/zoo.ico" type="image/logo/x-icon" >
    <!--END網頁標題+LOGO-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> <!--整個網站-->
    <link rel="stylesheet" href="assets/footer.css"><!--頁尾-->
    <link rel="stylesheet" href="assets/carousel.css"> <!--連播圖片-->
    <script src="https://kit.fontawesome.com/ea23884707.js" crossorigin="anonymous"></script> <!--icon-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><!--動畫 功能-->
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->
    <!-- <link rel="stylesheet" href="main.css"> -->

    <!--商品輪播-->
    <!-- <link rel="stylesheet" type="text/css" href="/assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/slick/slick-theme.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">

      $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    </script> -->

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
            <li class="breadcrumb-item"><a href="index.html">首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">會員專區</li>
          </ol>
        </nav>
        <!--END麵包削-->

        <!--會員專區-->
        <div>
          <h1>會員專區</h1>
          
          <a class="btn btn-primary" href="member-updateInfo.html" style=" float: right; margin-right: 20px; margin-bottom: 20px; width: 200px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #0f1730;background: #4d74a7; font-size: 16px; font-weight: 400; color: #fff;" >會員資料修改</a>&nbsp;&nbsp;&nbsp;&nbsp;


          <!--會員專區手風琴-->
          <div class="accordion accordion-flush" id="accordionFlushExample" >

            <!--購買清單-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  購買清單
                </button>
              </h2>
              
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <!--待付款-->
                  <div style="text-align: center;">
                    <h4>待付款</h4>
                  </div>

                  <!--訂單1-->
                  <div class="card">
                    <div class="card-header">
                      <h4>訂單1</h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">商品名稱</h5>
                      <p class="card-text" style="text-align: center;" >商品敘述</p>
                      <h5 class="card-title">商品名稱</h5>
                      <p class="card-text" style="text-align: center;">商品敘述</p>
                      <p class="card-text" style="text-align: right;">總金額: $1000</p>
                      <div style="text-align: center;"><a href="#" class="btn btn-primary" >Go</a></div>
                    </div>
                  </div>

                  <!--訂單2-->
                  <div class="card">
                    <div class="card-header">
                      <a href="#"><h4>訂單2</h4></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">商品名稱</h5>
                      <p class="card-text" style="text-align: center;" >商品敘述</p>
                      <h5 class="card-title">商品名稱</h5>
                      <p class="card-text" style="text-align: center;">商品敘述</p>
                      <p class="card-text" style="text-align: right;">總金額: $1000</p>
                      <!--<div style="text-align: center;"><a href="#" class="btn btn-primary" >Go</a></div>-->
                    </div>
                  </div>

                  <!--待出貨-->
                  <h4>待出貨</h4>
                  <div>
                  
                    <!--訂單1-->
                    <div class="card">
                      <div class="card-header">
                        <h4>訂單1</h4>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">商品名稱</h5>
                        <p class="card-text" style="text-align: center;" >商品敘述</p>
                        <h5 class="card-title">商品名稱</h5>
                        <p class="card-text" style="text-align: center;">商品敘述</p>
                        <p class="card-text" style="text-align: right;">總金額: $1000</p>
                        <div style="text-align: center;"><a href="#" class="btn btn-primary" >Go</a></div>
                      </div>
                    </div>

                  </div>

                  <h4>待收貨</h4>
                  <div>

                    <!--訂單1-->
                    <div class="card">
                      <div class="card-header">
                        <h4>訂單1</h4>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">商品名稱</h5>
                        <p class="card-text" style="text-align: center;" >商品敘述</p>
                        <h5 class="card-title">商品名稱</h5>
                        <p class="card-text" style="text-align: center;">商品敘述</p>
                        <p class="card-text" style="text-align: right;">總金額: $1000</p>
                        <div style="text-align: center;"><a href="#" class="btn btn-primary" >Go</a></div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
            </div>

            <!--優惠卷-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  優惠卷
                </button>
              </h2>

              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample" >
                <div class="accordion-body" >
                  
                  <!--優惠卷1-->
                  <div class="card" style="width: 12rem; float:left;">
                    <div class="card-body">
                      <h5 class="card-title">滿千折百</h5>
                      <p class="card-text">消費滿1000折100元</p>
                      <a href="products.html" class="card-link">立即使用</a>
                    </div>
                  </div>

                  <!--優惠卷2-->
                  <div class="card" style="width: 12rem; float:left;">
                    <div class="card-body">
                      <h5 class="card-title">滿千免運</h5>
                      <p class="card-text">消費滿1000免運費</p>
                      <a href="products.html" class="card-link">立即使用</a>
                    </div>
                  </div>

                  <!--優惠卷3-->
                  <div class="card" style="width: 12rem; float:left;">
                    <div class="card-body">
                      <h5 class="card-title">85折</h5>
                      <p class="card-text">購買指定商品打85折</p>
                      <a href="products.html" class="card-link">立即使用</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
            <!--收藏-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  我的收藏
                </button>
              </h2>

              <!--商品-->
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
            
                  <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        
                      <!--單個商品-->
                      <div class="col mb-5">
                        <div class="card h-100">
                          
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Hot</div>
                          
                          <!-- Product image-->
                          <img class="card-img-top" src="images/logo/logo.png" alt="..." />
                          
                          <!-- Product details-->
                          <div class="card-body p-4">
                            <div class="text-center">

                              <!-- Product name-->
                              <h5 class="fw-bolder">猴子娃娃</h5>

                              <!-- Product price-->
                              $4000

                            </div>
                          </div>
                          
                          <!-- 商品查看按鈕-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">查看</a></div>
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
                          <img class="card-img-top" src="images/logo/logo.png" alt="..." />
                          
                          <!-- Product details-->
                          <div class="card-body p-4">
                            <div class="text-center">

                              <!-- Product name-->
                              <h5 class="fw-bolder">猴子娃娃</h5>

                              <!-- Product price-->
                              $4000

                            </div>
                          </div>
                          
                          <!-- 商品查看按鈕-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">查看</a></div>
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
                          <img class="card-img-top" src="images/logo/logo.png" alt="..." />
                          
                          <!-- Product details-->
                          <div class="card-body p-4">
                            <div class="text-center">

                              <!-- Product name-->
                              <h5 class="fw-bolder">猴子娃娃</h5>

                              <!-- Product price-->
                              $4000

                            </div>
                          </div>
                          
                          <!-- 商品查看按鈕-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <a class="btn btn-outline-dark mt-auto" href="#">查看</a>
                          </div>
                          
                        </div>
                      </div>
                      <!--END單個商品-->
                        
                    </div>
                  </div>
                  
                </div>
                <div style="text-align: center;"><a href="member-likelist.html" class="btn btn-primary" >看更多</a></div>

              </div>
            </div>
            <!--END商品-->

            
          </div>
          <!--END會員專區手風琴-->
        </div>
        <!--END會員專區-->
        
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
