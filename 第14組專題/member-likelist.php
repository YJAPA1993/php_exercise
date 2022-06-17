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

    <title>收藏清單</title>
    <link rel="icon" href="images/zoo.ico" type="image/x-icon" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ea23884707.js" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>
    
    <header>

      <!--導覽列-->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <!-- 動物園名字+logo-->
          <a class="navbar-brand align-text-middle" href="index.html"><img src="images/zoo.png" width="45px" class="d-inline-block align-text-middle">FAR FAR AWAY ZOO</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

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

      

      <!--  =====================================start======================================== -->
      <div class="container body" style="margin: auto;">

        <!-- 麵包削-->    
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">首頁</a></li>
            <li class="breadcrumb-item"><a href="member.html">會員專區</a></li>
            <li class="breadcrumb-item active" aria-current="page">收藏清單</li>
          </ol>
        </nav>
        <!-- 麵包削結束-->



        <!--會員資料修改-->
        <div>
      
          <h1>
            <a href="member.html"><i class="fa fa-arrow-left" aria-hidden="true" style="color:black;"></i></a>&nbsp收藏清單
          </h1>

          <!--商品排序選擇-->
          <div style="text-align: right;">
            <select>
              <option value="">商品排列方式</option>
              <option value="price_low">價格低到高</option>
              <option value="price_high">價格高到低</option>
              <option value="hot">最熱銷</option>
              <option value="new">最新上架</option>
            </select>
          </div>

           <!--商品陳列-->
           <div>

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
                      <img class="card-img-top" src="images/logo.png" alt="..." />
                      
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
                      <img class="card-img-top" src="images/logo.png" alt="..." />
                      
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
                      <img class="card-img-top" src="images/logo.png" alt="..." />
                      
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
                      <img class="card-img-top" src="images/logo.png" alt="..." />
                      
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
                      <img class="card-img-top" src="images/logo.png" alt="..." />
                      
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
                      <img class="card-img-top" src="images/logo.png" alt="..." />
                      
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
                     
                </div>
              </div>
            </section>

          </div>
          <!--END商品陳列結束-->

        </div>
      </div>

      <!-- footer -->
      <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>我們是三位高大資管系113級的學生，希望透過此網站平台讓學生們找到適合自己的工讀機會。</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>811726 高雄市楠梓區高雄大學路 700 號管理學院</li>
                            <li>MAIL:part-time@mail.nuk.edu.tw</li>
                            <li>TEL:+886-7-5919326</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">首頁</a></li>
                            <li><a href="about.html">關於我們</a></li>
                            <li><a href="news.html">找工讀</a></li>
                            <li><a href="contact.html">聯絡我們</a></li>
                            <li><a href="single-product.html">常見問題</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Mail</h2>
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2022 - <a href="index.html">Paymee</a>,  All Rights Reserved.<br>
                        <!--Distributed By - <a href="https://themewagon.com/">Themewagon</a>-->
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/?lang=zh-Hant"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://tw.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--END Footer -->

    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
