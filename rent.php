<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда недвижимости - Benicosta.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    
    <link rel="stylesheet" href="assets/css/purchase.css">
  
</head>
<body>

<!-- PRELOADER -->
<?php include_once('blocks/preloader.php') ?>
 <!-- ======= Header ======= -->
 <header id="header-purchase" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index">Benicosta</a></h1>
    
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index">Главная</a></li>

          <li class="dropdown"><a href="#" class="active"><span>Недвижимость</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="rent" class="active">Аренда</a></li>
              <li><a href="purchase" >Продажа</a></li>
            </ul>
          </li>
          <li><a href="arts">Искуство</a></li>
          <li class="dropdown"><a href="#"><span>Мероприятия</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="events">Мероприятия в округе</a></li>
            </ul>
          <li><a href="advertisement">Обьявления</a></li>
          <li><a data-toggle="modal" data-target="#myModal" href="#myModal" class="getstarted text-decoration-none">Контакты</a></li>
          <li><a href="#" id="ru" class="lang"><img src="assets/img/language-flags/ru.png" alt="ru"></a></li>
          <li><a href="#" id="sp" class="lang"><img src="assets/img/language-flags/sp.png" alt="sp"></a></li>
          <li><a href="#" id="en" class="lang"><img src="assets/img/language-flags/eg.png" alt="en"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    <!-- ================== First Selector================== -->
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>АРЕНДА <span> НЕДВИЖИМОСТИ</span></h1>
     
      <
    </div>
  </section><!-- End Hero -->



   <!-- MODAL FOR CONTACT -->

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title text-center" id="myModalLabel">СВЯЗАТЬСЯ С НАМИ</h4>
            </div>
            <div class="modal-body text-center">
              <div class="row centered">
              <p>Адрес: Spain, Benidorm<br />Email: benicosta.com@gmail.com<br />Viber / What's app / Mobile: +380 66 847 8036<br /></p>
                <p>Мы работаем 24/7, если есть какие-то вопросы, задавай!</p>
                
                <form enctype="multipart/form-data" id="form" method="post" role="form" onsubmit="send(event, 'send.php')" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Ваш Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" id="message" placeholder="Сообщение" required></textarea>
          </div>
          <div class="text-center"><button type="submit" class='btn btn-success'>Отправить</button></div>
          <!-- <small class="text-muted">(При нажатии на кнопку, вы даете право на оброботку ваших даных)</small> -->
        </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php require('blocks/footer.php') ?>
  



<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>