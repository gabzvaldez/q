<html lang="en" ng-app="app">
  <head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>assets/IMAGES/DOH.PNG">

  <title>DOH - CHD NM Queueing System</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(180deg, #3f644a 10%, #22be52 100%);">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-0">
          <img src="<?php echo base_url(); ?>assets/images/logo.png" style="height: 40px;width: 40px;">
        </div>
        <div class="sidebar-brand-text mx-3">DOH CHD NM</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Divisions
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>division/msd">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>MSD</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>division/lhsd">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>LHSD</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>division/rled">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>RLED</span></a>
      </li>


      <!-- Heading -->
      <?php if($is_logged_in == 1){
        echo "<div class='sidebar-heading'>
                Panel
              </div>
              <li class='nav-item active'>
                <a class='nav-link' href='".base_url()."dashboard/panel/".$section2."'>
                  <i class='fas fa-fw fa-wrench'></i>
                  <span>myPanel</span></a>
              </li>";
      }else{

      }
      

      ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <?php 
                if($is_logged_in == 1){
                  echo "<a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>

                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>".$section2."</span>
                <img class='img-profile rounded-circle' src='".base_url()."assets/IMAGES/avatar.jpg'>
              </a>
              <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='userDropdown'>
                <a class='dropdown-item' href='".base_url()."main/logout'>
                  <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                  Logout
                </a>
              </div>";
                }else{
                  echo "<a class='nav-link dropdown-toggle' href='".base_url()."main/login'>
                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>Login</span>
              </a>";
                }
              ?>
              
              
          </li>
         <!--  <li class="nav-item dropdown no-arrow">
              <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>Valerie Luna</span>
              </a>
              <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='userDropdown'>
                <a class='dropdown-item' href='#'>
                  <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                  Logout
                </a>
              </div>
            </li> -->

          </ul>

        </nav>
        <!-- End of Topbar -->
<!-- Begin Page Content -->
  <div class="container-fluid">
    <h1 style="margin-top: 0.5%"><font color="black">DOH Intranet Queueing System</font></h1>
    