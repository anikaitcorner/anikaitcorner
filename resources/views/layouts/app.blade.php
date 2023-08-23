<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Anika IT Corner</title>
</head>

<body class="preloader-visible" data-barba="wrapper">


  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>

    <div class="preloader__progress">
      <div class="preloader__progress__inner"></div>
      <img src="img/general/loader.svg" alt="preloader image" class="preloader__img">
    </div>
  </div>
  <!-- preloader end -->


  <!-- cursor start -->
  <div class="cursor js-cursor">
    <div class="cursor__wrapper">
      <div class="cursor__follower js-follower"></div>
      <div class="cursor__label js-label"></div>
      <div class="cursor__icon js-icon"></div>
    </div>
  </div>
  <!-- cursor end -->

  <!-- barba container start -->
  <div class="barba-container" data-barba="container">
    <!-- to-top-button start -->
    <div data-cursor class="backButton js-backButton">
      <span class="backButton__bg"></span>
      <div class="backButton__icon__wrap">
        <i class="backButton__button js-top-button" data-feather="arrow-up"></i>
      </div>
    </div>
    <!-- to-top-button end -->

    <main class="">
      <x-navigation></x-navigation>

      <!-- Content -->
      {{ $slot }}

      <x-footer></x-footer>
    </main>

  </div>
  <!-- barba container end -->

  <!-- JavaScript -->
  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/d6cfda64fd.js" crossorigin="anonymous"></script>
</body>

</html>
