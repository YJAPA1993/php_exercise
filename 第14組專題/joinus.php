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
    <title>加入我們</title>
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
      <div class="container body" style="margin: auto;">

        <!-- 麵包削-->    
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">加入我們</li>
          </ol>
        </nav>
        <!-- 麵包削結束-->

        <!--加入我們-->
        <div>
          <h1>加入我們</h1>
          <!--加入我們分頁-->
          <div style="margin:auto;text-align:center;width:1000px;">
            <!--導覽列-->
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style=" float: right; margin-top: 20px; margin-bottom: 30px; margin-right: 20px; width: 180px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #641a1a;background: #e4622e; font-size: 16px; font-weight: 400; color: #fff;">動物認養</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style=" float: right; margin-top: 20px; margin-bottom: 30px; margin-right: 20px; width: 180px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #641a1a;background: #e4622e; font-size: 16px; font-weight: 400; color: #fff;">人才招募</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" style=" float: right; margin-top: 20px; margin-bottom: 30px; margin-right: 20px; width: 180px; height: 40px; border-radius: 20px; border: none; border-bottom: 4px solid #641a1a;background: #e4622e; font-size: 16px; font-weight: 400; color: #fff;">產學合作</button>
              </li>

            </ul>

            <!--標籤內容-->
            <div class="tab-content" id="myTabContent" >
              

              <!--標籤內容-動物認養-->
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; padding: 7px 12px; margin-top: 40px; margin-bottom: 20px; color: rgb(81, 34, 34);">
                    <b>動物認養計畫</b>
                  </h4>
                  
                  <div class="content" style=" width: 88%; margin: auto; text-align: center; margin: auto; text-align: start;">

                    <!--container-->
                    <div class="container">
                      <div class="row">
                        
                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <img class="card-img-top" src="images/animals/1.jpg" alt="..." />

                                <h4 class="fw-bolder">交個"猩"朋友</h4>
                                2022/06/06</br>
                                平時孤單寂寞一個人嗎？來交個"猩"朋友吧 ~
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-animalfeed-1.php">查看</a></div>
                            </div>

                          </div>
                        </div>
                        <!--END單個計畫-->

                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <img class="card-img-top" src="images/animals/2.jpg" alt="..." />

                                <h4 class="fw-bolder">2022瑪瑪麻吉麻</h4>
                                2022/04/22</br>
                                想跟瑪爾濟斯當麻吉麻？現在就有辦法囉！
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-animalfeed-2.php">查看</a></div>
                            </div>

                          </div>
                        </div>
                        <!--END單個計畫-->

                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <img class="card-img-top" src="images/animals/3.jpg" alt="..." />

                                <h4 class="fw-bolder">斗內熊貓直播主</h4>
                                2021/12/13</br>
                                每天晚上陪伴你的直播主，現在就來斗內他ㄅ！
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-animalfeed-3.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->
    
                      </div>
                    </div>
                    <!--END container-->
                        

                  </div>
                </div>

              </div>
              <!--END標籤內容-動物認養-->

              <!--標籤內容-人才招募-->
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto;  margin-bottom: 10px; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>人才招募</b>
                  </h4>

                  <!--導覽列-->
                  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home11-tab" data-bs-toggle="tab" data-bs-target="#home11" type="button" role="tab" aria-controls="home11" aria-selected="true">實習生</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact11-tab" data-bs-toggle="tab" data-bs-target="#contact11" type="button" role="tab" aria-controls="contact11" aria-selected="false">志工服務</button>
                    </li>
                  </ul>
                  <!--END導覽列-->

                  <!--內容-->
                  <div class="tab-content" id="myTabContent" >

                    <!--台灣動物區-->
                    <div class="tab-pane fade show active" id="home11" role="tabpanel" aria-labelledby="home11-tab">
                      <div class="row" style="margin-left: 200px; margin-right: 200px; margin-top: 20px;">
                        
                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <h4 class="fw-bolder">餵養員實習生招募</h4>
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-recruit-1.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->

                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <h4 class="fw-bolder">直播主實習生招募</h4>
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-recruit-2.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->

                      </div>
                    </div>
                    <!--END台灣動物區-->
                    
                    <!--熱帶動物區-->
                    <div class="tab-pane fade" id="contact11" role="tabpanel" aria-labelledby="contact11-tab">
                      <div class="row" style="margin-left: 200px; margin-right: 200px; margin-top: 20px;">
                        
                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <h4 class="fw-bolder">暑期志工</h4>
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-recruit-3.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->

                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <h4 class="fw-bolder">假日志工</h4>
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-recruit-4.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->

                      </div>
                    </div>
                    <!--END熱帶動物區-->

                  </div>
                  <!--內容-->
                  
                </div>
              </div>
              <!--END標籤內容-人才招募-->

              <!--標籤內容-產學合作-->
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                
                
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; margin-bottom: 10px; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>產學合作計畫</b>
                  </h4>
                  <div class="content" style=" width: 88%; margin: auto; text-align: center; margin: auto; text-align: start;">
                    <!-- Section-->
                    <!-- <div class="container px-4 px-lg-5 mt-5">
                      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> -->
                    <div class="container">
                      <div class="row">
                        
                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <img class="card-img-top" src="images/else/plan1.jpg" alt="..." />

                                <h4 class="fw-bolder">產學小聯盟計畫</h4>
                                2022/03/15</br>
                                一起共同打造快樂的動物生活環境吧！
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-cooperation-1.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->

                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <img class="card-img-top" src="images/else/plan2.jpg" alt="..." />

                                <h4 class="fw-bolder">前瞻技術產學合作計畫</h4>
                                2022/02/12</br>
                                整座山都是動物的家園
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-cooperation-2.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->

                        <!--單個計畫-->
                        <div class="col mb-4">
                          <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                              <div class="text-center">
                                <img class="card-img-top" src="images/else/plan3.jpg" alt="..." />

                                <h4 class="fw-bolder">動物園AR解謎互動遊戲開發計畫</h4>
                                2021/11/13</br>
                                結合生態保育、物種知識及推理解謎，引導遊客免費遊玩、探索園區。
                              </div>
                            </div>
                            <!-- 計畫查看按鈕-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="joinus-cooperation-3.php">查看</a></div>
                            </div>
                          </div>
                        </div>
                        <!--END單個計畫-->

                      </div>
                    </div>
                    <!--END Session-->  

                  </div>
                </div>

              </div>
              <!--END標籤內容-產學合作-->


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
