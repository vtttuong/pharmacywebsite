<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Assignment 1 Web</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo HOST;?>assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo HOST;?>assets/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
            <a href="">
              <img src="<?php echo HOST;?>assets/images/telephone-symbol-button.png" alt=""> Call : +01 1234567890
            </a>
          </div>
          <div class="social-container">
            <a href="">
              <img src="<?php echo HOST;?>assets/images/fb.png" alt="" class="s-1">
            </a>
            <a href="">
              <img src="<?php echo HOST;?>assets/images/twitter.png" alt="" class="s-2">
            </a>
            <a href="">
              <img src="<?php echo HOST;?>assets/images/instagram.png" alt="" class="s-3">
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="<?php echo HOST;?>assets/images/logo.png" alt="">
            <span>
              SkyWall
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo HOST;?>home">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo HOST;?>about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo HOST;?>buy"> Online Buy <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo HOST;?>cart"> Cart </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo HOST;?>contact">Contact us</a>
                </li>
              </ul>
              <form class="form-inline ">
                <input type="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <div class="login_btn-contanier ml-0 ml-lg-5">
              <?php if(!isset($_SESSION['id']))
                echo'
                <a href="'.HOST.'user">
                  <img src="'.HOST.'assets/images/user.png" alt="">
                  <span>Login</span>
                </a>';
                else echo'
                <a href="'.HOST.'user/change_pass">
                  <img src="'.HOST.'assets/images/user.png" alt=""></a>
                  <a href="'.HOST.'user/logout"><span>Logout</span></a>
                ';
                ?>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>





  <!-- health section -->

  <section class="health_section layout_padding">
    <?php 
      foreach($data as $ctgr)
      {
    ?>
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        <?php 
        echo $ctgr['name'];
        ?>

      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="owl-carousel">
          <?php 
          foreach($ctgr['product'] as $product)
          {
          ?>
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <button class="btnBuy" data-datac="<?php echo $product['id']; ?>">
                  Buy Now
                </button>
              </div>
              <div class="img-box">
                <img src="<?php echo $product['img'];?>" alt="">
              </div>
              <div class="detail-box">
                <div class="text">
                  <h6>
                    <?php echo $product['name'];?>
                  </h6>
                  <h6 class="price">

                    <?php echo $product['price'];?>VNĐ
                  </h6>
                </div>
              </div>
            </div>      
          </div>
          <?php 
          }
          ?>
        </div>
      </div>
    </div>
    <?php 
    }
    ?>
  </section>

  <!-- end health section -->



  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="<?php echo HOST;?>assets/images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +01 123567894
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="<?php echo HOST;?>assets/images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  demo@gmail
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo HOST;?>home">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo HOST;?>about"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo HOST;?>buy"> Online Buy <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_news">
            <h4>
              newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter Your email">
              <div class="d-flex justify-content-center justify-content-md-end mt-3">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2020 All Rights Reserved. Design by
      <a href="#">SkyWall</a>
    </p>
  </section>
  <!-- footer section -->

  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script src="<?php echo HOST;?>assets/js/buy.js"></script>
</body>

</html>