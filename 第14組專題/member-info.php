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

    <title>會員資料修改</title>
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

      @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

      html {
        font-family: 'Montserrat', Arial, sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }

      body {
        background: #F2F3EB;
      }

      button {
        overflow: visible;
      }

      button, select {
        text-transform: none;
      }

      button, input, select, textarea {
        color: #5A5A5A;
        font: inherit;
        margin: 0;
      }

      input {
        line-height: normal;
      }

      textarea {
        overflow: auto;
      }

      #container {
        border: solid 3px #474544;
        max-width: 768px;
        margin: 60px auto;
        position: relative;
      }

      form {
        padding: 37.5px;
        margin: 50px 0;
      }

      h1 {
        color: #474544;
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 7px;
        text-align: center;
        text-transform: uppercase;
      }

      .underline {
        border-bottom: solid 2px #474544;
        margin: -0.512em auto;
        width: 80px;
      }

      .icon_wrapper {
        margin: 50px auto 0;
        width: 100%;
      }

      .icon {
        display: block;
        fill: #474544;
        height: 50px;
        margin: 0 auto;
        width: 50px;
      }

      .email {
        float: right;
        width: 45%;
      }

      input[type='text'], [type='email'], select, textarea {
        background: none;
        border: none;
        border-bottom: solid 2px #474544;
        color: #474544;
        font-size: 1.000em;
        font-weight: 400;
        letter-spacing: 1px;
        margin: 0em 0 1.875em 0;
        padding: 0 0 0.875em 0;
        text-transform: uppercase;
        width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        -o-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
      }

      input[type='text']:focus, [type='email']:focus, textarea:focus {
        outline: none;
        padding: 0 0 0.875em 0;
      }

      .message {
        float: none;
      }

      .name {
        float: left;
        width: 45%;
      }

      select {
        background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
        outline: none;
        -moz-appearance: none;
        -webkit-appearance: none;
      }

      select::-ms-expand {
        display: none;
      }

      .subject {
        width: 100%;
      }

      .telephone {
        width: 100%;
      }

      textarea {
        line-height: 150%;
        height: 150px;
        resize: none;
        width: 100%;
      }

      ::-webkit-input-placeholder {
        color: #474544;
      }

      :-moz-placeholder { 
        color: #474544;
        opacity: 1;
      }

      ::-moz-placeholder {
        color: #474544;
        opacity: 1;
      }

      :-ms-input-placeholder {
        color: #474544;
      }

      #form_button {
        background: none;
        border: solid 2px #474544;
        color: #474544;
        cursor: pointer;
        display: inline-block;
        font-family: 'Helvetica', Arial, sans-serif;
        font-size: 0.875em;
        font-weight: bold;
        outline: none;
        padding: 20px 35px;
        text-transform: uppercase;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
      }

      #form_button:hover {
        background: #474544;
        color: #F2F3EB;
      }

      @media screen and (max-width: 768px) {
        #container {
          margin: 20px auto;
          width: 95%;
        }
      }

      @media screen and (max-width: 480px) {
        h1 {
          font-size: 26px;
        }
        
        .underline {
          width: 68px;
        }
        
        #form_button {
          padding: 15px 25px;
        }
      }

      @media screen and (max-width: 420px) {
        h1 {
          font-size: 18px;
        }
        
        .icon {
          height: 35px;
          width: 35px;
        }
        
        .underline {
          width: 53px;
        }
        
        input[type='text'], [type='email'], select, textarea {
          font-size: 0.875em;
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
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <!--翻動圖片下面的小點點(頁數)-->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!--翻動圖片每頁內容-->
        <div class="carousel-inner">

          <!--圖片1-->
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#6a698b"/></svg>

            <div class="container">
              <div class="carousel-caption text-start">
                
                <a href="member.html"><img src="images/1.jpg" class="d-block w-100 h-20" alt=""></a>

                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#">Go</a></p>-->
              </div>
            </div>
          </div>

          <!--圖片2-->
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

            <div class="container">
              <div class="carousel-caption">

                <a href="member.html"><img src="images/2.jpg" class="d-block w-100 h-20" alt=""></a>

                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>-->
              </div>
            </div>
          </div>

          <!--圖片3-->
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <a href="member.html"><img src="images/3.jpg" class="d-block w-100 h-20" alt=""></a>
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <!--<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>-->
              </div>
            </div>
          </div>
        </div>

        <!--翻動圖片的左右箭頭-->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-shown">上一頁</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
      </div>

      <!--  =====================================start======================================== -->
      <div class="container body" style="margin: auto;">

        <!-- 麵包削-->    
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">首頁</a></li>
            <li class="breadcrumb-item"><a href="member.html">會員專區</a></li>
            <li class="breadcrumb-item active" aria-current="page">會員資料修改</li>
          </ol>
        </nav>
        <!-- 麵包削結束-->

        <!--會員資料修改-->
        <div>
          
          <h1>
            <a href="member.html"><i class="fa fa-arrow-left" aria-hidden="true" style="color:black;"></i></a>&nbsp會員資料修改
          </h1>

          <div id="container">
            <h1>&bull; abc1234(帳號) &bull;</h1>
            
            <!--會員圖片-->
            <div class="images" style="text-align: center;">
              <img src="images/zoo.png" width="15%" height="15%">
            </div>

            <div style="text-align: center;"><a href="#">修改會員照片</a></div>
            
            <form action="#" method="post" id="contact_form">

              <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="My name is" name="name" id="name_input" required>
              </div>

              <div class="email">
                <label for="email"></label>
                <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
              </div>

              <div class="telephone">
                <label for="name"></label>
                <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
              </div>
            
              <div class="message">
                <label for="message"></label>
                <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
              </div>

              <div class="submit">
                <input type="submit" value="Send Message" id="form_button" />
              </div>

            </form><!-- // End form -->
          </div><!-- // End #container -->
          
          
        </div>
        
      </div>


      <!--頁尾-->
      <hr class="featurette-divider"><!--底線-->

      
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