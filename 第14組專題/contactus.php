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
    <title>聯絡我們</title>
    <link rel="icon" href="images/logo/zoo.ico" type="image/logo/x-icon" >
    <!--END網頁標題+LOGO-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> <!--整個網站-->
    <link rel="stylesheet" href="assets/footer.css"><!--頁尾-->
    <link rel="stylesheet" href="assets/carousel.css"> <!--連播圖片-->
    <script src="https://kit.fontawesome.com/ea23884707.js" crossorigin="anonymous"></script> <!--icon-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><!--動畫 功能-->
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->
    <!-- <link rel="stylesheet" href="main.css"> -->

    <!--表單-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      * {
      box-sizing: border-box;
      }
      /* html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px; 
      color: #666;
      } */
      input, textarea { 
      outline: none;
      }
      /* body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      background: #5a7233;
      } */
      h1 {
      margin-top: 0;
      font-weight: 500;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      background: #fff;
      }
      /* .form-left-decoration,
      .form-right-decoration {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 20px;
      background: #5a7233;
      } */
      /* .form-left-decoration {
      bottom: 60px;
      left: -30px;
      }
      .form-right-decoration {
      top: 60px;
      right: -30px;
      } */
      /* .form-left-decoration:before,
      .form-left-decoration:after,
      .form-right-decoration:before,
      .form-right-decoration:after {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration:before {
      top: -20px;
      }
      .form-left-decoration:after {
      top: 20px;
      left: 10px;
      }
      .form-right-decoration:before {
      top: -20px;
      right: 0;
      }
      .form-right-decoration:after {
      top: 20px;
      right: 10px;
      }
      .circle {
      position: absolute;
      bottom: 80px;
      left: -55px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      } */
      .form-inner {
      padding: 40px;
      }
      .form-inner input,
      .form-inner textarea {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background: #f1e5d6;
      }
      .form-inner textarea {
      resize: none;
      }
      button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      /* border-radius: 20px; */
      border: none;
      border-bottom: 4px solid #321d16;
      background: #8e5237; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      /* button:hover {
      background: #3e4f24;
      }  */
      @media (min-width: 568px) {
      form {
      width: 60%;
      margin: auto;
      text-align: center;
      }
      }
    </style>

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
            <a href="index.html">
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
            <a href="products.html">
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
            <a href="animals.html">
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
            <a href="joinus.html">
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
            <li class="breadcrumb-item active" aria-current="page">聯絡我們</li>
          </ol>
        </nav>
        <!-- 麵包削結束-->

        <!--聯絡我們-->
        <div>
          
          <h1>聯絡我們</h1>
          <!--聯絡我們分頁-->
          <div class = "container news" style="margin:auto;text-align:center;width:1000px;border:3px #cccccc">

            <!--導覽列-->
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">常見問題</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">聯絡資訊</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">聯絡表單</button>
              </li>

            </ul>

            <!--標籤內容-->
            <div class="tab-content" id="myTabContent" >
              
              <!--標籤內容-常見問題-->
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>常見問題</b>
                  </h4>
 
                  <!--常見問題手風琴-->
                  <div class="accordion" id="accordionExample" style="margin: 30px; text-align: start;">

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <!--問題-->
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Q1. 如何購票入園 ?
                        </button>
                      </h2>
                      <!--END問題-->
                      <!--回答-->
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          參觀本園可直接持悠遊卡EasyCard、一卡通iPass、愛金卡iCash2.0無須排隊購票，可直接刷卡入園，節省排隊購票時間，付款前請務必確認餘額足夠。
                        </div>
                      </div>
                      <!--END回答-->
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Q2. 請問動物園內是否有遊客接駁車？
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          無，請自行走路，加油！
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Q3. 請問園區有哪些地方可蓋遊園紀念章？
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          園區可蓋遊園紀念章共5處，大門入口遊客服務中心、昆蟲館二樓、爬蟲館服務台、貓熊館二樓賣店。
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Q4. 請問在企鵝館內拍照可以使用閃光燈嗎？
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          本園企鵝館參考國內外圈養企鵝的經驗及工作人員長時間觀察與評估，閃光燈不致危害企鵝本身。</br>
                          園方已取消企鵝館禁止使用閃光燈之限制，館內已取消禁用閃光燈告示牌。
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Q5. 請問動物園全面禁菸嗎？
                        </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          當然！抽菸小GG小奶奶！
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Q6. 為什麼動物園禁止寵物入園呢？
                        </button>
                      </h2>
                      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          當然是因為怕動物大戰爭鴨！說什麼傻話！
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          Q7. 請問有哪些遊客必須遵守的注意事項嗎？
                        </button>
                      </h2>
                      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <ul>
                            <li>入園遊客須配合實聯制並全程配戴口罩及維持社交距離。未依規定配戴口罩，經勸導不聽者，將依違反傳染病防治法第37條第1項第6款規定，由地方政府裁罰新臺幣3千元以上1萬5千元以下罰鍰。</li>                            
                            <li>請維持室外1公尺，室內1.5公尺之社交距離，進入室內館需實聯(名)制人流管控。</li>
                            <li>遊客列車於每次搭乘後立即清理消毒。</li>
                            <li>參觀請全面配戴口罩，除了生理必須之飲水、用藥，須於飲用完畢後立即配戴口罩。</li>
                            <li>【溫心提醒】提醒您體溫超過37.5度以上或有發燒、咳嗽等症狀者，為了維護自身及他人健康安全，請勿入園。</li>
                            <li>建議穿長袖、長褲，以防蚊蟲叮咬。</li>
                            <li>本園為無菸公園示範區，園區全面禁菸。</li>
                            <li>禁止攜帶寵物、充氣氣球入園。</li>
                            <li>禁止在園區內騎腳踏車、幼兒三輪車及滑板車、直排輪。</li>
                            <li>禁止跨越欄杆進入動物展示場。</li>
                            <li>禁止進入作業區及遊客列車車道。</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                          Q8. 當天出園後可再度入園嗎？
                        </button>
                      </h2>
                      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          可在出園的出口處加蓋戳章，當日憑此戳章可免費再次入園，請記得務必最晚於下午4點前入園。
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                          Q9. 動物園開放時間？
                        </button>
                      </h2>
                      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          動物園僅除夕日及不對外開放期間休園，全年無休。但有些館區週一公休，有關開放參觀時間於本園網站均有公佈，請參考遊園資訊開放時間及參觀票價．
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                          Q10. 請問動物園有提供場地租借服務嗎？
                        </button>
                      </h2>
                      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          請參考本園官網 行政資訊/其他服務/場地租借 申請相關規定。
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                          Q11. 請問如何申請團體預約導覽？
                        </button>
                      </h2>
                      <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          請參考線上服務本園官網-教育資源/團體預約導覽 查詢申辦說明。
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                    <!--手風琴內容-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseFive">
                          Q12. 請問動物園參觀門票有含保險費嗎?
                        </button>
                      </h2>
                      <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <ul>
                            <li>動物園參觀門票並沒有包含保險費用。</li>
                            <li>園區有提供的保險為第三人公共意外責任險（因園方設施導致受傷，憑相關醫療單據可與保險公司協商評估後給予理賠）。</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--END手風情內容-->

                  </div>
                  <!--END常見問題手風琴-->
                </div>
              </div>
              <!--END標籤內容-常見問題-->

              <!--標籤內容-聯絡資訊-->
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!--聯絡資訊-->
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>聯絡資訊</b>
                  </h4>
                  <div class="content" style=" width: 88%; margin: auto; text-align: center; padding: 1px 100px; text-align: start;">
                    <ul style="margin: 20px;">
                      <li>電話 ： 0912345678</li>
                      <li>Email ： wearezoo@gmail.com</li>
                      <li>Instagram ： we_are_zoo_</li>
                      <li>抖音 ： wearezooyyds</li>
                      <li>地址 ： 火星繞一百零一圈走兩步到</li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0374604393837!2d120.25230734984441!3d22.72684898503051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e08b34a8b8691%3A0xc42d8865f738ca1d!2z6Jq15LuU5a-u5ryB5riv!5e0!3m2!1szh-TW!2stw!4v1653878796970!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
                <!--END聯絡資訊-->
              </div>
              <!--END標籤內容-聯絡資訊-->

              <!--標籤內容-聯絡我們-->
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <!--聯絡表單-->
                <div style="border-style: groove; margin-bottom: 50px;">
                  <h4 style="display: block; width: 88%; height: 40px; text-align: center; border-radius: 5px; background-color: #c7b6a7; margin: auto; margin-bottom: 5px; padding: 7px 12px; margin-top: 40px; color: rgb(81, 34, 34);">
                    <b>聯絡表單</b>
                  </h4>

                  <div class="content" style="margin: auto; margin-bottom: 30px; text-align: center; padding: 1px 100px;">

                    <form method="post" action="contact.php"class="decor"enctype="multipart/form-data">
                      <div class="form-inner">
                        <label for="uname"><strong><h3>姓名*</h3></strong></label>
                        <input type="text" placeholder="Username" name="name" required>

                        <label for="uemail"><strong><h3>電子信箱*</h3></strong></label>
                        <input type="email" placeholder="Email" name="email" required>

                        <label for="umessage"><strong><h3>訊息*</h3></strong></label>
                        <textarea placeholder="Message..." rows="5" name="comment" required></textarea>

                        <button type="submit" href="/" style="border-radius: 20px;">送出</button>
                      </div>
                    </form>

                  </div>
                </div>
                
              </div>
              <!--END聯絡表單-->

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
