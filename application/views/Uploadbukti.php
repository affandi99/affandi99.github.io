<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pembayaran</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="assets/vendor/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="login100-form validate-form flex-sb flex-w">
          <span class="login100-form-title " >
            <h3>Cara Pembayaran</h3><hr>
          </span>
          
              <h8> Tata cara pembayaran : </h8><br>
                <p> <h9>  1. Masuk kemenu ATM </h9> <br>
                    <h9>  2. Pilih transfer </h9><br>
                    <h9>  3. Pilih Virtual Acount Billing </h9><br>
                    <h9>  4. Masukan nomor VA </h9><br>
                    <h7>  No VA : 098087652415 </h7><hr>
                </p>
          
              <span class="txt1 w-full"><br>
                Upload bukti pembayaran : 
              </span> 

                  <br><form method="post" action="proses.php" enctype="multipasrt/form-data">
                    Berkas : <input type="file" name="foto"/>
                </form> <hr>

          <center>
          <div class="text-lg-center"><br>
            <a class= "btn btn-dark" href="<?php echo base_url('C_checkout');?>">Kembali</a>
            <span>
            <a class="btn btn-dark" href="<?php echo base_url('C_home');?>">Lanjut</a>
            </span>
          </div>
        </center>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="assets/vendor/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/login/vendor/bootstrap/js/popper.js"></script>
  <script src="assets/vendor/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/login/vendor/daterangepicker/moment.min.js"></script>
  <script src="assets/vendor/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/login/js/main.js"></script>

</body>
</html>