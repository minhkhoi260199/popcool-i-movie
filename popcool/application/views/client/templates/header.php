<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PopCool Movie</title>
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>public/client/img/popcool-icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url()?>public/client/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url()?>public/client/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url()?>public/client/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>public/client/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url()?>public/client/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url()?>public/client/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url()?>public/client/css/responsive.css" rel="stylesheet">
    
           <!--link ........................... -->
           <!--link ........................... -->

  <!-- ===== Chèn link CSS cho body ở đây== -->
  <link href="<?php echo base_url()?>public/client/body/text.css" rel="stylesheet">

  <!-- ===== FilmDetail == -->
  <link href="<?php echo base_url()?>public/client/chitiet/FilmDetail.css" rel="stylesheet">
  <!-- ===== Lich chieu == -->
  <link href="<?php echo base_url()?>public/client/chitiet/LichChieu.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example" style="background-image:url(<?php echo base_url()?>public/client/img/background/background_03.jpg); background-repeat: no-repeat ; background-position: center; background-size: cover; background-attachment: fixed;">
  <div id="preloader"></div>
  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url()?>client/index">
                  <h1>
                  <img style="width:30px" src="<?php echo base_url()?>public/client/img/popcool-icon.png">
                    PopCool<span>!</span>Movie
                  </h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="<?php if(isset($menuIndex)){echo $menuIndex;} ?>">
                    <a class="page-scroll" href="<?php echo base_url()?>client/index">Trang chủ</a>
                  </li>

                  <li class="dropdown <?php if(isset($menuMovie)){echo $menuMovie;} ?> "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Phim<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo base_url()?>client/nowShowing" ><i class="fa fa-sign-out fa-fw"></i> Phim đang chiếu</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url()?>client/comingSoon" ><i class="fa fa-sign-out fa-fw"></i> Phim sắp chiếu</a></li>
                    </ul> 
                  </li>

                  <li class="<?php if(isset($menuTime)){echo $menuTime;} ?>">
                    <a class="page-scroll" href="<?php echo base_url()?>client/showTime">Lịch chiếu</a>
                  </li>
                  <?php if(isset($_SESSION['email'])){?>
                        <!-- Logined  /.dropdown -->
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i>
                      
                        <?= $listthanhvien?>
                      
                      <i class="fa fa-caret-down"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url()?>registration/Logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        
                      </ul>
                    <!-- /.dropdown-user -->
                  </li>
                  <!-- /.dropdown -->
                  <?php }
                    else{?>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url()?>registration/loadLogin">ĐĂNG NHẬP</a>
                    
                  </li>
                  <?php
                  }?>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
