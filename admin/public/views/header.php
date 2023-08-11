<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");
if (!isset($this->pageTitle)) $this->pageTitle = '';

$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
// $org_data  = $db->getOrgData();
// $org_contact  = $db->getContactData();
?>
<!doctype html>
<html>

<head>
  <title><?php echo @$this->pageTitle; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL ?>assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL ?>assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL ?>assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo URL ?>assets/favicon/site.webmanifest">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URL ?>assets/adminlte/css/adminlte.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Nunito:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <!--========== FONTAWESOME ==========-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!--========== BOOTSTRAP 5 ==========-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--========== BOX ICONS ==========-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!--========== CSS ==========-->
  <link rel="stylesheet" href="<?php echo URL ?>assets/css/custom.css">
  <?php
  if (isset($this->css)) {
    foreach ($this->css as $css) {
      echo '<link href="' . URL . $css . '" rel="stylesheet">';
    }
  }
  ?>
</head>

<!-- <body class="hold-transition sidebar-mini fixed"> -->
<!-- <div class="wrapper"> -->
<!-- <nav class="main-header navbar navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
          </a>
        </li>
      </ul>
      <h4><?php echo $this->pageTitle; ?></h4>
    </nav> -->
<!-- 
    <aside class="main-sidebar sidebar-blue elevation-1">
      <a href="<?php echo URL ?>" class="brand-link">
        <div class="brand-text text-center"> Admin Panel</div>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <?php if (Session::get('username') != null) : ?>
              <a href="#" class="d-block">
                Logged in as: <?php echo Session::get('username'); ?>
              </a>
            <?php endif; ?>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo URL ?>dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo URL ?>organization" class="nav-link">
                <i class="nav-icon fas fa-angle-right"></i>
                <p>
                  Organization
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>personalInfoCv" class="nav-link">
                <i class="nav-icon fas fa-angle-right"></i>
                <p>
                  Personal Info / CV
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>portfolio" class="nav-link">
                <i class="nav-icon fas fa-angle-right"></i>
                <p>
                  Portfolio
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>blog_artical" class="nav-link">
                <i class="nav-icon fas fa-angle-right"></i>
                <p>
                  Blog & Artical
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>contactUs" class="nav-link">
                <i class="nav-icon fas fa-angle-right"></i>
                <p>
                  Contact Us
                </p>
              </a>
            </li>
        

            <li class="nav-header"> User Manager </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>changePassword" class="nav-link">
                <i class="fas fa-key nav-icon"></i>
                <p> Change password </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo URL ?>logout" class="nav-link">
                <i class="fas fa-power-off nav-icon"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside> -->
<!-- <div class="content-wrapper"> -->

<body>
  <!--========== HEADER ==========-->
  <header class="header mb-3">
    <div class="header__container">
      <?php if (Session::get('username') != null) : ?>
        <h4 class=""><i class="fas fa-user"> </i> <?php echo Session::get('username'); ?></h4>
      <?php endif; ?>

      <h4 class="header__logo"><?php echo $this->pageTitle; ?></h4>
      <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
      </div>
    </div>
  </header>

  <!--========== NAV ==========-->
  <div class="nav" id="navbar">
    <nav class="nav__container">
      <div>
        <!-- <a href="#" class="nav__link nav__logo">
          <i class='bx bxs-disc nav__icon'></i>
          <span class="nav__logo-name">SPM CREATIVE</span>
        </a> -->


        <div class="nav__list">
          <div class="nav__items">
            <a href="<?php echo URL ?>dashboard" class="nav__link">
              <i class='bx bx-user nav__icon'></i>
              <span class="nav__name">DASHBOARD</span>
            </a>

            <a href="<?php echo URL ?>organization" class="nav__link active">
              <i class='bx bxs-dashboard nav__icon'></i>
              <span class="nav__name">ORGANIZATION</span>
            </a>

            <a href="<?php echo URL ?>sliderImage" class="nav__link">
              <i class='bx bx-clipboard nav__icon'></i>
              <span class="nav__name">SLIDER IMAGES</span>
            </a>
            <a href="<?php echo URL ?>personalInfoCv" class="nav__link">
              <i class='bx bx-clipboard nav__icon'></i>
              <span class="nav__name">PERSONAL INFO</span>
            </a>
            <a href="<?php echo URL ?>portfolio" class="nav__link">
              <i class='bx bx-clipboard nav__icon'></i>
              <span class="nav__name">PORTFOLIO</span>
            </a>
            <a href="<?php echo URL ?>blog_artical" class="nav__link">
              <i class='bx bx-clipboard nav__icon'></i>
              <span class="nav__name">BLOG & ARTICAL</span>
            </a>
            <a href="<?php echo URL ?>contactUs" class="nav__link">
              <i class='bx bx-clipboard nav__icon'></i>
              <span class="nav__name">CONTACT US</span>
            </a>


            <a href="<?php echo URL ?>changePassword" class="nav__link">
              <i class='bx bx-key nav__icon'></i>
              <span class="nav__name">CHANGE PASSWORD</span>
            </a>
          </div>
        </div>
      </div>

      <a href="<?php echo URL ?>logout" class="nav__link nav__logout">
        <i class='bx bx-log-out nav__icon'></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
  </div>