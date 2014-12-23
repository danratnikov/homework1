<?php require_once('header.php');?>

<!-- content container -->
<div class="container">
  <!-- sidebar -->
  <?php  require_once('sidebar.php');?>
  <!-- main content -->
    
  <div class="content">
    <!-- base info -->
    <div class="base-info content-block border-rad3">
      <h2><span class="block-title">Основная информация</span></h2>
      <div class="photo">
        <img src="img/me.jpg" alt="Ratnikov Danil">
      </div>
      <div class="info">
        <ul class="properties">
          <li class="property clearfix">
            <h3 class="prop-name">Меня зовут:</h3>
            <p>Ратников Данил Геннадьевич</p>
          </li>
          <li class="property clearfix">
            <h3 class="prop-name">Мой возраст:</h3>
            <p>33 года</p>
          </li>
          <li class="property clearfix">
            <h3 class="prop-name">Мой город:</h3>
            <p>Нижний Тагил, Россия</p>
          </li>
          <li class="property clearfix">
            <h3 class="prop-name">Моя специализация:</h3>
            <p>FRONTEND разработчик</p>
          </li>
          <li class="property clearfix">
            <h3 class="prop-name">Ключевые навыки:</h3>
            <p><span class="tag">html</span>
            <span class="tag">css</span>
            <span class="tag">javascript</span>
            <span class="tag">gulp</span>
            <span class="tag">git</span></p>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- experience info list -->
    <div class="experience-info content-block features border-rad3">
      <h2><span class="block-title">Опыт работы</span></h2>
      <ul class="feature-list">
        <li class="feature clearfix">
          <div class="feature-icon">
            <img src="img/briefcace.png" alt="">
          </div>
          <div class="feature-description">
            <p class="feature-name">"ЗАО Трест 88" - Мастер ПГС</p>
            <p class="feature-time">Сентябрь 2004 - Сентябрь 2008</p>
          </div>
        </li>
        <li class="feature clearfix">
          <div class="feature-icon">
            <img src="img/briefcace.png" alt="">
          </div>
          <div class="feature-description">
            <p class="feature-name">"ЗАО ГП УралГазСтрой" - Мастер ПГС</p>
            <p class="feature-time">Ноябрь 2008 - Май 2013</p>
          </div>
        </li>
      </ul>
    </div>
    
    <!-- education info -->
    <div class="education-info content-block features border-rad3">
      <h2><span class="block-title">Образование</span></h2>
      <ul class="feature-list">
        <li class="feature clearfix">
          <div class="feature-icon">
            <img src="img/heap-icon.png" height="23" width="42" alt="">
          </div>
          <div class="feature-description">
            <p class="feature-name">Высшее. НТИ(Ф)УГТУ-УПИ Инженер-строитель</p>
            <p class="feature-time">Сентябрь 1998 - Июль 2004</p>
          </div>
        </li>
        <li class="feature clearfix">
          <div class="feature-icon">
            <img src="img/course-icon.png" height="32" width="26" alt="">
          </div>
          <div class="feature-description">
            <p class="feature-name">Курсы Loftschool.ru</p>
            <p class="feature-time">Декабрь 2014 - по настоящее время</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<?php require_once('footer.php');
