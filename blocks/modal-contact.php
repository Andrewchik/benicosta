<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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