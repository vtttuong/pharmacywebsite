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
<<<<<<< HEAD
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/css/bootstrap.css" />

=======
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
>>>>>>> master
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost:8080/weblayout/assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="http://localhost:8080/weblayout/assets/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
            <a href="">
              <img src="http://localhost:8080/weblayout/assets/images/telephone-symbol-button.png" alt=""> Call : +01 1234567890
            </a>
          </div>
          <div class="social-container">
            <a href="">
              <img src="http://localhost:8080/weblayout/assets/images/fb.png" alt="" class="s-1">
            </a>
            <a href="">
              <img src="http://localhost:8080/weblayout/assets/images/twitter.png" alt="" class="s-2">
            </a>
            <a href="">
              <img src="http://localhost:8080/weblayout/assets/images/instagram.png" alt="" class="s-3">
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index">
            <img src="http://localhost:8080/weblayout/assets/images/logo.png" alt="">
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
                  <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="medicine"> Medicine </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buy"> Online Buy </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news"> News </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact">Contact us</a>
                </li>
              </ul>
              <form class="form-inline ">
                <input type="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <?php 
                    if(isset($_SESSION['userlogin']))
                    {
                      $loginCheck = $_SESSION['userlogin'];
                      if ($loginCheck==false){
                        echo '<a href="user">
                        <img src="http://localhost:8080/weblayout/assets/images/user.png" alt="">
                        <span>Login</span></a>';
                      }
                      else
                      {
                        echo '<a href="user/logout">
                        <img src="http://localhost:8080/weblayout/assets/images/user.png" alt="">
                        <span>Logout</span></a>';
                      }
                    }
                    else
                    {
                       echo '<a href="user">
                      <img src="http://localhost:8080/weblayout/assets/images/user.png" alt="">
                      <span>Login</span></a>';
                    }
  
                ?>
                
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>



  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Request A call back
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
            <form>
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputNumber1" name="phone">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
              </div>

              <div class="form-group">
                <label for="exampleInputMessage">Message</label>
                <input type="text" class="form-control" id="exampleInputMessage" name="message">
              </div>
              <button type="submit" class="">Send</button>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Get Now Medicines
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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
                <img src="http://localhost:8080/weblayout/assets/images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +01 123567894
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="http://localhost:8080/weblayout/assets/images/email.png" alt="">
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
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="medicine.html"> Medicine </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buy.html"> Online Buy </a>
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

<<<<<<< HEAD
  <script type="text/javascript" src="http://localhost:8080/weblayout/assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="http://localhost:8080/weblayout/assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
=======
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
>>>>>>> master
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
  <script src="<?php echo HOST;?>assets/js/contact.js"></script>
</body>

</html>