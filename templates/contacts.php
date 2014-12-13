<?php require_once(header.php);?>     

<!-- content container -->
<div class="container">
  <!-- sidebar -->
  <div class="sidebar">
    <div class="menu border-rad3">
      <ul class="menu-list">
        <li class="menu-item"><a href="index.html">Обо мне</a></li>
        <li class="menu-item"><a href="myworks.html">Мои работы</a></li>
        <li class="menu-item active"><a href="contact_form.html">Связаться со мной</a></li>
      </ul>
    </div>
    <div class="contacts border-rad3">
      <h2>Контакты</h2>
      <ul class="contacts-list">
        <li class="contact-list-line post"><span class="post-icon"></span><a href="mailto:ratnikov.danil@gmail.com">pochta@mail.ru</a></li>
        <li class="contact-list-line tel"><span class="tel-icon"></span><a href="tel:+79826220560">+79812342323</a></li>
        <li class="contact-list-line skype"><span class="skype-icon"></span><a href="skype:ratnikov.danil">nickname</a></li>
      </ul>
    </div>
  </div>
  <!-- main content -->
    
  <div class="content border-rad4">
    <div class="contact-form">
      <form action="sendmail.php" method="post">
        <div class="form-header">
          <h2>У вас интересный проект? Напишите мне</h2>
        </div>
        <div class="header-divider"></div>
        <div class="form-body">
          <div class="input-container">
            <div class="input-row clearfix sixfive">
              <div class="col1">
                <label for="input-name">Имя</label>
                <input class="border-rad4" type="text" id="input-name" name="username" placeholder="Как к Вам обращаться" required>     
              </div>
              <div class="col2">
                <label for="input-email">Email</label>
                <input class="border-rad4" type="email" id="input-email" name="useremail" placeholder="Куда мне писать" required>
              </div>
            </div>
            <div class="input-row clearfix">
              <label for="input-message">Сообщение</label>
              <textarea class="border-rad4" name="usermessage" id="input-message" placeholder="Кратко в чем суть" required></textarea>
            </div>
            <div class="input-row clearfix">
              <label for="captha-pic">Введите код, указанный на картинке</label>
              <div class="col1">
                <img class="border-rad4" src="img/captcha.jpg" alt="captcha" id="captcha-img">
              </div>
              <div class="col2">
                <div class="captcha-input">
                  <input class="border-rad4" type="text" name="captcha-text" placeholder="Введите код" required>
                </div>
              </div>
            </div>
            <div class="input-row clearfix button-row">
              <div class="col1">
                <input class="submit border-rad5" type="submit" value="Отправить">
              </div>
              <div class="col2">
                <input class="clear-form border-rad5" type="button" value="Очистить">
              </div>  
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require_once(footer.php);