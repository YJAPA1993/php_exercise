<?php
    session_start(); 
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
    <title>周邊商店</title>
    <link rel="icon" href="images/logo/zoo.ico" type="image/logo/x-icon" >
    <!--END網頁標題+LOGO-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> <!--整個網站-->
    <link rel="stylesheet" href="assets/footer.css"><!--頁尾-->
    <link rel="stylesheet" href="assets/carousel.css"> <!--連播圖片-->
    <script src="https://kit.fontawesome.com/ea23884707.js" crossorigin="anonymous"></script> <!--icon-->

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->
    <link rel="stylesheet" href="main.css"

    <!--購物車-->
    <link rel="stylesheet" href="chart.css">
    <link rel="stylesheet" href="assets/jquery.mycart-master/css/bootstrap.min.css">

    <!--商品-->
    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"> -->
    <!-- Css Styles -->
    <!-- <link rel="stylesheet" href="assets/shop/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/shop/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/shop/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/shop/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/shop/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/shop/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/shop/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/shop/css/style.css" type="text/css"> -->

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
                <i class="glyphicon glyphicon-shopping-cart my-cart-icon" style="color: #fff;width: 45px;height: 50px;"><span class="badge badge-notify my-cart-badge"></span></i>
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
      
      <div class="container body" style="margin: auto;">
        <!-- 麵包屑-->    
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">周邊商品</li>
          </ol>
        </nav>
        <!-- 麵包削結束-->

        <!--周邊商店-->
        <div>
          <h1>周邊商店</h1>
        </div>


                <!--================================================== row ====================================================-->
                <div class="row">
                    
                  <?php
                    require("DBconnect.php");
                    $SQL="SELECT * FROM product";
                    if($result=mysqli_query($link,$SQL)){
                      while($row=mysqli_fetch_assoc($result)){
                        echo '<div class="card col-3">';
                        echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Hot</div>';
                        echo '<a href="products-1.php?p_name='.$row["p_name"].'"><img class="card-img-top" src="images/products/'.$row['p_pic'].'" alt="..." /></a>';
                        echo '<div class="card-body text-center"><h4 class="fw-bolder"><b>'.$row['p_name'].'</h4>$'.$row['p_price'].'</b></div>';
                        echo '<div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">';
                        echo '<button class="btn btn-success mt-auto my-cart-btn" data-id="'.$row['p_name'].'" data-name="'.$row['p_name'].'" data-summary="" data-price="'.$row['p_price'].'" data-quantity="1" data-image="/images/products/'.$row['p_pic'].'">加入購物車</button>';
                        echo '</div></div>';
                        // '.$row['p_pnum'].'
                      }
                    }
                  ?>

                </div>
                <!--================================================== END row ====================================================-->
              </div>
              <!--END container-->

        <!-- <nav aria-label="Page navigation example" style="margin: auto; text-align: center;">
          <ul class="pagination justify-content-end text-center" >
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">上一頁</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">下一頁</a>
            </li>
          </ul>
        </nav> -->
      </div>
      <?php
      ob_start();
      $_SESSION['list_id']=rand(1,1000);
      echo $_SESSION['list_id'];
      ?>
      <script src="assets/jquery.mycart-master/js/jquery-2.2.3.min.js"></script>
      <script type='text/javascript' src="assets/jquery.mycart-master/js/bootstrap.min.js"></script>
      <script type='text/javascript' src="assets/jquery.mycart-master/js/jquery.mycart.js"></script>
      <script type="text/javascript">
      $(function () {

        var goToCartIcon = function($addTocartBtn){
          var $cartIcon = $(".my-cart-icon");
          var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
          $addTocartBtn.prepend($image);
          var position = $cartIcon.position();
          $image.animate({
            top: position.top,
            left: position.left
          }, 500 , "linear", function() {
            $image.remove();
          });
        }

        $('.my-cart-btn').myCart({
          classCartIcon: 'my-cart-icon',
          classCartBadge: 'my-cart-badge',
          classProductQuantity: 'my-product-quantity',
          classProductRemove: 'my-product-remove',
          classCheckoutCart: 'my-cart-checkout',
          affixCartIcon: true,
          showCheckoutModal: true,
          cartItems: [
            // {id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'images/img_1.png'},
            // {id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'images/img_2.png'},
            // {id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'images/img_3.png'}
          ],
          clickOnAddToCart: function($addTocart){
            goToCartIcon($addTocart);
          },
          afterAddOnCart: function(products, totalPrice, totalQuantity) {
            console.log("afterAddOnCart", products, totalPrice, totalQuantity);
          },
          clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
            console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
          },
          checkoutCart: function(products, totalPrice, totalQuantity) {
            var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
            checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
            $.each(products, function(){
              checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
              var products = this.name;
              var totalPrice = this.price;
              var totalQuantity = this.quantity;
              $.ajax({ 
                  type: "POST",
                  url: "cart.php",
                  data: {
                      "products":products,
                      "totalPrice":totalPrice,
                      "totalQuantity":totalQuantity,
                        },
                  error: function(jqXHR, textStatus, errorThrown) {
                  alert(jqXHR.responseText);
                  },
                  success: function(data) {

                }
                  
                });
            });
            alert(checkoutString)
            console.log("checking out", products, totalPrice, totalQuantity);
            
          },
          getDiscountPrice: function(products, totalPrice, totalQuantity) {
            console.log("calculating discount", products, totalPrice, totalQuantity);
            return totalPrice * 0.5;
          }
        });

        $("#addNewProduct").click(function(event) {
          var currentElementNo = $(".row").children().length + 1;
          $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
        });
      });
      </script>
      
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