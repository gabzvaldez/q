<html lang="en"><head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title; ?></title>

  <link rel="icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image" sizes="">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/sbadmin/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: linear-gradient(180deg, #c8df4e 10%, #22be52 100%);">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block">
              	<center>
              		<img src="<?php echo base_url(); ?>assets/images/bg1.jpg" style="width: 100%;height:60%;">
              	</center>
              </div> -->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><img src="<?php echo base_url(); ?>assets/images/logo.png" style="height: 40px;width: 40px;"> DOH - CHD NM Reporting System</h1>
                  </div>
                  <form class="user" method="POST" action="<?php echo base_url(); ?>main/verify_login">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                    </div>
                    <input type="submit" class="btn btn-success btn-user btn-block"
                      value="Login"
                    />
                    
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <!-- <a class="small" href="register.html">Create an Account!</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/sbadmin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/sbadmin/js/sb-admin-2.min.js"></script>




</body></html>