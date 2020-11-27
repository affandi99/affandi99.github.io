<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/Groovin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/Groovin/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/Groovin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/Groovin/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/Groovin/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/Groovin/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="vendor/Groovin/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">IMPACT</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('C_home');?>">Home</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#kelas">Join Class</a></li> 
          <li><a href="#contact">Contact</a></li>
          <li><a href="#premium">Get Premium</a></li>
        </ul>

      </nav><!-- .nav-menu -->

      <!-- <button class="btn btn-outline-warning" >Get Premiun</button> -->
       <div class="btn-group">
            <a href="<?= base_url('Landing');?>" class="btn btn-outline-warning btn-sm"><p>Logout</p></a>
          </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

       

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/logo2.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown" style="">Impact</h2>
                <p class="animate__animated animate__fadeInUp">Bisnis Maju Bersama IMPACT</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Profile</a>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"> <img src="assets/img/user.png" style="width: 100%; height: 100%"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <center><h1>Selamat Datang</h1></center>
              <!-- <center><h3><?php echo $this->session->userdata('username'); ?></h3></center> -->
              <div class="row">
                <div class="col-md-6 icon-box">
                  <i class="icofont-ui-settings"></i>
                  <h4><a href="#">Pengaturan Akun</a></h4>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="icofont-ticket"></i>
                  <h4><a href="#">Voucher Anda</a></h4>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="icofont-history"></i>
                  <h4><a href="#">Riwayat</a></h4>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="icofont-telephone"></i>
                   <h4><a href="#">Pusat Bantuan</a></h4>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="kelas" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Pelatihan UMKM</h2>
          <p>Dalam menu ini anda dapat memilih kelas pelatihan yang anda inginkan dengan harga yang sangat terjangkau dan materi pelaihan yang memuaskan</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="<?php echo base_url('C_pkelas');?>">Kelas Basic</a></h4>
            <p class="description">Merupakan pelatihan dasar dalam memulai UMKM</p>
            <p class="description"> Rp.150000 </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="<?php echo base_url('C_pkelas');?>">Strategi Penjualan</a></h4>
            <p class="description">Strategi efektif menjual apapun dengan mudah</p>
            <p class="description"> Rp.150000 </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="<?php echo base_url('C_pkelas');?>">Memahami UMKM</a></h4>
            <p class="description">Penjelasan dasar-dasar UMKM</p>
            <p class="description"> Rp.150000 </p>
            </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="<?php echo base_url('C_pkelas');?>">Membuat Desain</a></h4>
            <p class="description">Pelatihan membuat desain produk yang menarik</p>
            <p class="description"> Rp.150000 </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="<?php echo base_url('C_pkelas');?>">Atur Harga</a></h4>
            <p class="description">Pelatihan mengatur harga produk</p>
            <p class="description"> Rp.150000 </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="<?php echo base_url('C_pkelas');?>">Tips Mengelola keuangan</a></h4>
            <p class="description">Tips dan trik mengelola pengeluaran serta pemasukan</p>
            <p class="description"> Rp.150000 </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="premium" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Get Premium</h2>
          <p>Dengan membeli member premium anda mendapatkan berbagai keuntungan dengan harga yang sangat terjangkau</p>
        </div>

        <div class="row" >


          <div class="col-10 col-sm-6 col-lg-4 col-md-6 offset-1 offset-sm-3 offset-md-3 offset-lg-4 mt-4 mt-md-0" >
            <div class="box recommended">
              <h3>Premium</h3>
              <h4><sup>Rp</sup>15000<span> / month</span></h4>
              <ul>
                <li>Get More Voucher & Discount</li>
                <li>200+ UMKM Welcome premium member</li>
              </ul>
              <div class="btn-wrap">
                <a href="<?= base_url('C_pembayaran');?>" class="btn-buy">Join Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="icofont-google-map"></i>
              <h3>Address</h3>
              <address>-</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="icofont-phone"></i>
              <h3>Phone Number</h3>
              <p>-</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="icofont-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:impact@gmail.com">impact@gmail.com</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/Groovin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="vendor/Groovin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/Groovin/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/Groovin/assets/vendor/php-email-form/validate.js"></script>
  <script src="vendor/Groovin/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendor/Groovin/assets/vendor/counterup/counterup.min.js"></script>
  <script src="vendor/Groovin/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/Groovin/assets/vendor/venobox/venobox.min.js"></script>
  <script src="vendor/Groovin/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="vendor/Groovin/assets/js/main.js"></script>

</body>

</html>