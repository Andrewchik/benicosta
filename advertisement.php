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
    <link rel="stylesheet" href="assets/css/advertisement.css">
  
</head>
<body>
 <!-- ======= Header ======= -->
 <header id="header-purchase" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index">Benicosta</a></h1>
    
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index">Главная</a></li>

          <li class="dropdown"><a href="#"><span>Недвижимость</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="rent" >Аренда</a></li>
              <li><a href="purchase" >Продажа</a></li>
            </ul>
          </li>
          <li><a href="#">Искуство</a></li>
          <li class="dropdown"><a href="#"><span>Мероприятия</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Мероприятия в округе</a></li>
            </ul>
          <li><a href="advertisement" class="active">Обьявления</a></li>
          <li><a href="#contact" class="getstarted">Контакты</a></li>
          <li><a href="#" id="ru" class="lang"><img src="assets/img/language-flags/ru.png" alt="ru"></a></li>
          <li><a href="#" id="sp" class="lang"><img src="assets/img/language-flags/sp.png" alt="sp"></a></li>
          <li><a href="#" id="en" class="lang"><img src="assets/img/language-flags/eg.png" alt="en"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    <!-- ================== First Selector================== -->
   
   <section id="ad">
   <div class="container contact-form">
            <div class="contact-image">
                <img src="assets/img/logo.png" alt="rocket_contact"/>
            </div>
            <form enctype="multipart/form-data" id="form" method="post" role="form" onsubmit="sendAd(event, 'sendAd.php')">
                <h2>Здесь вы можите запостить ваше обьявление</h2>
                <p class='text-center'>После отправки, ваше обьявление будет рассмотрено модератором, после чего оно появится на сайте.</p>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id='name' placeholder="Ваше имя" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" id='email' placeholder="Ваш Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" id='phone' placeholder="Ваш номер телефона *" value="" />
                        </div>
                        <div class="input-group mb-3">
                             <input type="file" name="myfile[]" multiple id="myfile" class="form-control" > <!-- id="inputGroupFile02" -->
                        </div>
                       
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="text" class="form-control" id='text' placeholder="Текст вашего обьявление *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="btnSend form-group">
                            <input type="submit" name="btnSubmit" class="btnSendPost" value="Отправить" />
                        </div>
                    </div>
                </div>
            </form>
</div>

   </section>
   <section id="posts">
    <h2 class='no-posts fs-1 text-center'>Нет обьявлений.</h3>
   </section>


<footer>
    <div class=" sotial-links text-center">
    
      <div class="credits">
        Created by <a href="#">VGORYACHO</a>
      </div>
      <div class="social-links mt-3">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
    <div class="privacy credits">
      <a href="privacy">Политика конфиденциальности</a>
    </div>
  </footer>
  
<!-- Send Ad. -->
<script>
  function sendAd(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
		json = JSON.parse(this.response); // Ебанный internet explorer 11
    	console.log(json);
        
    	// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
    	if (json.result == "success") {
    		// Если сообщение отправлено
    		alert("Сообщение отправлено");
    	} else {
    		// Если произошла ошибка
    		alert("Ошибка. Сообщение не отправлено");
    	}
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
</script> 
<!-- END Send Ad. -->

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script> 
<script src="assets/js/sendMail.js"></script>

</body>
</html>