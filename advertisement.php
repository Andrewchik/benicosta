<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обьявления - Benicosta.com</title>
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
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
  
</head>
<body>
<!-- PRELOADER -->
<?php include_once('blocks/preloader.php') ?>
 <!-- ======= Header ======= -->
 <header id="header-purchase" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">Benicosta</a></h1>
    
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Главная</a></li>

          <li class="dropdown"><a href="#"><span>Недвижимость</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="rent" >Аренда</a></li>
              <li><a href="purchase" >Продажа</a></li>
            </ul>
          </li>
          <li><a href="arts">Искуство</a></li>
          <li class="dropdown"><a href="#"><span>Мероприятия</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="events">Мероприятия в округе</a></li>
            </ul>
          <li><a href="advertisement" class="active">Обьявления</a></li>
          <li><a data-toggle="modal" data-target="#myModal" href="#myModal" class="getstarted text-decoration-none">Контакты</a></li>
          <li class="dropdown"><a href="#"><img src="assets/img/language-flags/ru.png" alt="ru"> <i class="bi bi-chevron-down"></i></a>
            <ul style="width: 55px;">
              <li><a href="about.html"><img src="assets/img/language-flags/sp.png" alt="sp"></a></li>
              <li><a href="about.html"><img src="assets/img/language-flags/eg.png" alt="eg"></a></li>
            
            </ul>
          </li>
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
                             <input type="file" name="myfile[]" multiple id="myfile" class="form-control" accept=".png, .jpg, .jpeg" /> <!-- id="inputGroupFile02" -->
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
   

   <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header text-center">
          <h2>Обьявления</h2>
          
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">3</a>
          </li>
        </ul>

        

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><date>02.03.2021</date></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="https://richmondhousebeauty.co.uk/wp-content/uploads/2020/02/lash-brow-tinting.jpg" alt="Brenden Legros">
                </div>
                <h4>Здраствуйте! Меня зовут Татьяна.</h4>
                <p>Я сертифицированный мастер Lash-Brow индустрии.</p>
                <p>С удовольствием предоставлю вам услуги:</p>
              <ul>
                <li>Классическое наращивание</li>
                <li>Объемное наращивание </li>
                <li>Окрашивание ресниц</li>
                <li>Окрашивание бровей</li>
              </ul>
                <h5>What's App: 698210506</h5>
                <h5><a href="https://www.instagram.com/p/CIgrf_wHLKq/?igshid=nbo7t0bzxirv">Instagram</a></h5>
              </div>
            </div>

            <!-- <div class="row schedule-item">
              <div class="col-md-2"><date>02.03.2021</date></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="https://richmondhousebeauty.co.uk/wp-content/uploads/2020/02/lash-brow-tinting.jpg" alt="Brenden Legros">
                </div>
                <h4>Здраствуйте! Меня зовут Татьяна.</h4>
                <p>Я сертифицированный мастер Lash-Brow индустрии.</p>
                <p>С удовольствием предоставлю вам услуги:</p>
              <ul>
                <li>Классическое наращивание</li>
                <li>Объемное наращивание </li>
                <li>Окрашивание ресниц</li>
                <li>Окрашивание бровей</li>
              </ul>
                <h5>What's App: 698210506</h5>
              </div>
            </div> -->

            <!-- <div class="row schedule-item">
              <div class="col-md-2"><date>02.03.2021</date></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="https://richmondhousebeauty.co.uk/wp-content/uploads/2020/02/lash-brow-tinting.jpg" alt="Brenden Legros">
                </div>
                <h4>Здраствуйте! Меня зовут Татьяна.</h4>
                <p>Я сертифицированный мастер Lash-Brow индустрии.</p>
                <p>С удовольствием предоставлю вам услуги:</p>
              <ul>
                <li>Классическое наращивание</li>
                <li>Объемное наращивание </li>
                <li>Окрашивание ресниц</li>
                <li>Окрашивание бровей</li>
              </ul>
                <h5>What's App: 698210506</h5>
              </div>
            </div> -->

            <!-- <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <!-- <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div> -->
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <!-- <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div> -->
          <!--End Schdule Day 3 -->

        </div>

      </div>

    </section><!-- End Schedule Section -->


      <!-- MODAL FOR CONTACT -->
     <?php require('blocks/modal-contact.php') ?>
      <!-- FOOTER -->

      <?php require('blocks/footer.php') ?>
  
<!-- Send Ad. -->
<script>
  function sendAd(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
		json = JSON.parse(this.response); 
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