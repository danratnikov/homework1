<?php require_once('header.php'); ?>     

     <!-- content container -->

<div class="container">

      <!-- sidebar -->

  <?php  require_once('sidebar.php');?>
      <!-- main content -->
        
      <div class="content border-rad4">
        <div class="contact-form">
          <form id="sendmail">
            <div class="form-header">
              <h2>У вас интересный проект? Напишите мне</h2>
            </div>
            <div class="header-divider"></div>
            <div class="form-body">
              <div class="input-container">
                <div class="input-row clearfix sixfive">
                  <div class="col1">
                    <label for="input-name">Имя</label>
                    <input class="border-rad4" type="text" id="input-name" name="username" placeholder="Как к Вам обращаться">     
                  </div>
                  <div class="col2">
                    <label for="input-email">Email</label>
                    <input class="border-rad4" type="email" id="input-email" name="useremail" placeholder="Куда мне писать">
                  </div>
                </div>
                <div class="input-row clearfix">
                  <label for="input-message">Сообщение</label>
                  <textarea class="border-rad4" name="usermessage" id="input-message" placeholder="Кратко в чем суть"></textarea>
                </div>
                <div class="input-row clearfix">
                  <label for="captha-pic">Введите код, указанный на картинке</label>
                  <div class="col1">
                    <img class="border-rad4" src="img/captcha.jpg" alt="captcha" id="captcha-img">
                  </div>
                  <div class="col2">
                    <div class="captcha-input">
                      <input class="border-rad4" type="text" name="captcha-text" placeholder="Введите код">
                    </div>
                  </div>
                </div>
                <div class="input-row clearfix button-row">
                  <div class="col1">
                    <input class="submit border-rad5" type="submit" value="Отправить">
                  </div>
                  <div class="col2">
                    <input id="clear_button" class="clear-form border-rad5" type="button" value="Очистить">
                  </div>  
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>

<?php require_once('footer.php');