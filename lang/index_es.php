<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Principal - Benicosta.com</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Modal Window -->
 
  

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

 
</head>

<body>
<?php require('../blocks/preloader.php') ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index_es.php">Benicosta</a></h1>
    
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Principal</a></li>

          <li class="dropdown"><a href="#"><span>La propiedad</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="rent">Alquileres</a></li>
              <li><a href="purchase" >Venta</a></li>
            </ul>
          </li>
          <li><a href="arts">Arte</a></li>
          <li class="dropdown"><a href="#"><span>Actividad</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="events">Actividades en la zona</a></li>
            </ul>
          <li><a href="advertisement">Anuncios</a></li>
          <li><a href = "#contact" class="getstarted">Contactos</a></li>
          <li class="dropdown"><a href="/"><img src="../assets/img/language-flags/ru.png" alt="ru"> <i class="bi bi-chevron-down"></i></a>
            <ul style="width: 55px;">
              <li><a href="index_es.php"><img src="../assets/img/language-flags/sp.png" alt="sp"></a></li>
              <li><a href="about.html"><img src="../assets/img/language-flags/eg.png" alt="eg"></a></li>
            
            </ul>
          </li>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(../assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">CLUB DE VIAJEROS</h2>
              <p class="animate__animated animate__fadeInUp">Una gran selección de lugares para viajar solo aquí</p>
              <a href="https://benicostatour.com/home.html" class="btn-get-started animate__animated animate__fadeInUp">Más detalles</a>
             
              
            </div>
          </div>
        </div>
       
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">ORGANIZACIÓN DE EVENTOS</h2>
              <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
              <a href="events" class="btn-get-started animate__animated animate__fadeInUp scrollto">Más detalles</a>
             
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">ARTE</h2>
              <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
              <a href="arts" class="btn-get-started animate__animated animate__fadeInUp scrollto">Más detalles</a>
             
            </div>
          </div>
        </div>

         <!-- Slide 4 -->
         <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">LA PROPIEDAD <br> VENTA / ALQUILER</h2>
                <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
                <button id="myModal" class="btn-get-started animate__animated animate__fadeInUp scrollto">Más detalles</button>
               
               
              </div>
            </div>
          </div>
          
           <!-- Slide 5 -->
         <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-5.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">TABLÓN DE ANUNCIOS</h2>
              <p class="animate__animated animate__fadeInUp">Aquí puede publicar sus anuncios</p>
              <a href="advertisement" class="btn-get-started animate__animated animate__fadeInUp scrollto">Más detalles</a>
             
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
      
    </div>
    
  </section><!-- End Hero -->

  <!-- MODAL -->
  <div class="wrap">
  <div class="modal js-modal">
    <div class="modal-image">
      <svg viewBox="0 0 32 32" style="fill:#48DB71"><path d="M1 14 L5 10 L13 18 L27 4 L31 8 L13 26 z"></path></svg>
    </div>
    <h1>Nice job!</h1>
    <p>To dismiss click the button below</p>
    <button class="js-close">Dismiss</button>
  </div>
</div>
  <!-- END MODAL -->

  <main id="main">

    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h2>Sobre nosotros</h2>
          <p class="about-text">Основа нашей философии — страсть к приключениям и открытиям. 
              Мы предлагаем вам разнообразные форматы туров, забираем вас с аэропорта и предоставляем гида. 
              Выбирайте доступные туры на нашем сайте <span style= "color:red;">benocostatour.com</span> или свяжитесь с нами для разработки индивидуального путешествия.</p>
          <a class="btn-tour" href="https://benicostatour.com/home.html"><span>Туры от BENICOSTA</span></a>
        </div>

      </div>
    </section><!-- End Cta Section -->

   

 <!-- ======= Places Section ======= -->
 <section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Lugares interesantes</h2>
      <p class = "section-subtitle">Benidorm de día y de noche</p>
    </div>

   

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item ">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/benidorm.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>App 1</h4>
            <p>App</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/benidorm.png" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item ">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/benidorm2.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>Web 3</h4>
            <p>Web</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/benidorm2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

       <div class="col-lg-4 col-md-6 portfolio-item ">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/benidorm3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>App 2</h4>
            <p>App</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/benidorm3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>
      </div>
      

      <div class="section-title">
        <p>Benidorm no dejará indiferente a nadie. Los 365 días del año, esta ciudad nunca adormecida ofrece a sus huéspedes una amplia gama inigualable de oportunidades y servicios de alta calidad.</p>
      </div>


      <div class="section-title">
        <p class = "section-subtitle">Yurtas y campings</p>
      </div>
    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item ">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/yurta1-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>App 1</h4>
            <p>App</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/yurta1-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/yurta1-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>Web 3</h4>
            <p>Web</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/yurta1-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

       <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/yurta1-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>App 2</h4>
            <p>App</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/yurta1-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="section-title">
        <p>A 17km de Benidorm en el Camping Fuentes del Algar junto a las cascadas. Totalmente equipado, se puede preparar el desayuno, área de barbacoa y vistas a la montaña, estacionamiento privado al lado de cada yurta.</p>
      </div>


      <div class="section-title">
        <p class = "section-subtitle">Pueblo de Alcoy</p>
      </div>
    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/alcoy1.jpg" class="img-fluid" alt="alcoy1">
          <div class="portfolio-info">
            <!-- <h4>App 1</h4>
            <p>App</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/alcoy1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/alcoy2.jpg" class="img-fluid" alt="alcoy2">
          <div class="portfolio-info">
            <!-- <h4>Web 3</h4>
            <p>Web</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/alcoy2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

       <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
          <img src="../assets/img/places/alcoy3.jpg" class="img-fluid" alt="alcoy3">
          <div class="portfolio-info">
            <!-- <h4>App 2</h4>
            <p>App</p> -->
            <div class="portfolio-links">
              <a href="../assets/img/places/alcoy3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="section-title">
        <p>Alcoy es un municipio y ciudad situada en el sureste de España, en la provincia de Alicante, Comunidad Valenciana. Es una ciudad asombrosa dividida en dos partes y unida por puentes, tiene 59 354 habitantes. La ciudad tiene un gran valor histórico e industrial.</p>
      <div class="text-center"><a class="btn-restaurant" href="https://www.facebook.com/cafeteria.cerveceria.quico/?ti=as"><span>Restaurante "Cervecería Quico"</span></a></div>
     
      </div>
      
       
      
      <!-- <div class="button-places">
        <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Больше мест</a>
      </div> -->
      
      
  </div>
  
</section><!-- End Places Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2 class="text-center">CONTACTOS</h2>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>La dirección</h3>
          <p>Spain, Benidorm</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-envelope"></i>
          <h3>Correo electrónico</h3>
          <p>benicosta.com@gmail.com</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-phone-call"></i>
          <h3>Viber / What's app / Mobile</h3>
          <p>+34 655-011-096</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 ">
        <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 369px;" allowfullscreen></iframe> -->
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49933.4774626101!2d-0.1650149592188982!3d38.53740228456267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6204dca62575c3%3A0x219fa90c0ff26eb5!2z0JHQtdC90LjQtNC-0YDQvCwg0JDQu9C40LrQsNC90YLQtSwg0JjRgdC_0LDQvdC40Y8!5e0!3m2!1sru!2sde!4v1613406994624!5m2!1sru!2sde" style="border:0; width: 100%; height: 369px;"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-lg-6">
        <form enctype="multipart/form-data" id="form" method="post" role="form" onsubmit="send(event, '../send.php')" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Tema" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" id="message" placeholder="Mensaje" required></textarea>
          </div>
          <div class="text-center"><button type="submit">Enviar un mensaje</button></div>
          <!-- <small class="text-muted">(При нажатии на кнопку, вы даете право на оброботку ваших даных)</small> -->
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

<?php require('../blocks/footer_es.php') ?>




   
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Maps -->

 
 
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <!-- Modal window -->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/sendMail.js"></script>
</body>

</html>