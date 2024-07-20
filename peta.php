<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jakarta</title>

  <!-- Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers" />
  <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
  <link rel="shortcut icon" href="assets/images/icon.png" />

  <!-- FontAwesome JS-->
  <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

  <!-- App CSS -->
  <link id="theme-style" rel="stylesheet" href="assets/css/portal.css" />
</head>

<body class="app">
  <header class="app-header fixed-top">
    <div class="app-header-inner">
      <div class="container-fluid py-2">
        <div class="app-header-content">
          <div class="row justify-content-between align-items-center">
            <div class="col-auto">
              <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                  <title>Menu</title>
                  <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                </svg>
              </a>
            </div>
            <!--//col-->
            <div class="search-mobile-trigger d-sm-none col">
              <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
            </div>
            <!--//col-->
            <div class="app-title-box col">
              <h3 class="website-title">Title...</h3>
            </div>

            <!--//app-search-box-->
            <div class="app-utilities col-auto">
              <!--//app-utility-item-->

              <div class="app-utility-item app-user-dropdown dropdown">
                <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="assets/images/user_1.png" alt="user profile" /></a>
                <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                  <li><a class="dropdown-item" href="login.html">Log In</a></li>
                  <li><a class="dropdown-item" href="#">Log Out</a></li>
                  <!-- <li><hr class="dropdown-divider" /></li> -->
                </ul>
              </div>
              <!--//app-user-dropdown-->
            </div>
            <!--//app-utilities-->
          </div>
          <!--//row-->
        </div>
        <!--//app-header-content-->
      </div>
      <!--//container-fluid-->
    </div>
    <!--//app-header-inner-->
    <div id="app-sidepanel" class="app-sidepanel">
      <div id="sidepanel-drop" class="sidepanel-drop"></div>
      <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
          <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/jkt1.png" alt="logo" /><span class="logo-text">JAKARTA SATU</span></a>
        </div>
        <!--//app-branding-->

        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
          <ul class="app-menu list-unstyled accordion" id="menu-accordion">
            <li class="nav-item">
              <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
              <a class="nav-link" href="index.html">
                <span class="nav-icon">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  </svg>
                </span>
                <span class="nav-link-text">Beranda</span>
              </a>
              <!--//nav-link-->
            </li>

            <li class="nav-item">
              <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
              <a class="nav-link active" href="peta.php">
                <span class="nav-icon">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-map" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z" />
                  </svg>
                </span>
                <span class="nav-link-text">Peta</span>
              </a>
              <!--//nav-link-->
            </li>

            <!--//nav-item-->
            <li class="nav-item">
              <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
              <a class="nav-link" href="orders.html">
                <span class="nav-icon">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                    <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                    <circle cx="3.5" cy="5.5" r=".5" />
                    <circle cx="3.5" cy="8" r=".5" />
                    <circle cx="3.5" cy="10.5" r=".5" />
                  </svg>
                </span>
                <span class="nav-link-text">Informasi</span>
              </a>
              <!--//nav-link-->
            </li>

            <!--//nav-item-->
          </ul>
          <!--//app-menu-->
        </nav>
        <!--//app-sidepanel-footer-->
      </div>
      <!--//sidepanel-inner-->
    </div>
    <!--//app-sidepanel-->
  </header>
  <!--//app-header-->

  <div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
        <h1 class="app-page-title">Peta</h1>
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
          <div class="inner">
            <div class="col-12 col-lg-9">
              <!--//row-->
            </div>
            <!--//app-card-body-->
            <?php
            include 'map.php';
            ?>
          </div>
          <!--//inner-->

        </div>
        <!--//app-card-->
      </div>
      <!--//container-fluid-->
    </div>
    <!--//app-content-->

    <!-- <footer class="app-footer">
      <div class="container text-center py-3"> -->
    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
    <!-- <small class="copyright">Hak Cipta 2020. Pemerintah Provinsi Daerah Khusus Ibukota Jakarta. </small>
      </div>
    </footer> -->
    <!--//app-footer-->
  </div>
  <!--//app-wrapper-->

  <!-- Javascript -->
  <script src="assets/plugins/popper.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

  <!-- Charts JS -->
  <script src="assets/plugins/chart.js/chart.min.js"></script>
  <script src="assets/js/index-charts.js"></script>

  <!-- Page Specific JS -->
  <script src="assets/js/app.js"></script>
</body>

</html>