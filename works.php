<?php require_once('header.php'); ?>

<!-- content container -->

<div class="container">

		<!-- sidebar -->

  <?php  require_once('sidebar.php');?>

		<!-- main content -->
			
		<div class="content">

			<!-- works info -->
			<div class="works-info content-block border-rad3">
				<h2><span class="block-title">Мои работы</span></h2>
				<ul class="works-list">
					<li class="work-item">
						<div class="work-item-box border-rad5">
							<img src="img/work-item1.png" alt="www.site.ru">
							<div class="work-item-hover">
								<h4>
									<span>Название</span>
								</h4>								
							</div>
						</div>
						<a href="">www.site.ru</a>
						<p>Информация о проекте 1 превью 2 строки...</p>

					</li>
					<li class="work-item">
						<div class="work-item-box border-rad5">
							<img class="border-rad3" src="img/work-item2.png" alt="www.site.ru">
							<div class="work-item-hover">
								<h4>
									<span>Название</span>
								</h4>								
							</div>
						</div>
						<a href="">www.site.ru</a>
						<p>Информация о проекте 2 превью 2 строки...</p>
					</li>
					<li class="work-item">
						<div class="work-item-box border-rad5">
							<img class="border-rad3" src="img/work-item3.png" alt="www.site.ru">
							<div class="work-item-hover">
								<h4>
									<span>Название</span>
								</h4>								
							</div>
						</div>
						<a href="">www.site.ru</a>
						<p>Информация о проекте 3 превью 2 строки...</p>
					</li>
					<li class="work-item">
						<div class="work-item-box border-rad5">
							<img class="border-rad3" src="img/work-item4.png" alt="www.site.ru">
							<div class="work-item-hover">
								<h4>
									<span>Название</span>
								</h4>								
							</div>
						</div>
						<a href="">www.site.ru</a>
						<p>Информация о проекте 4 превью 2 строки...</p>
					</li>
					<li class="work-item">
						<div class="add-work-item">
							<a href="" class="add-work-item-link">
								<img src="img/add-work-item-icon.png" alt="">
								<p>Добавить работу</p>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
</div>

<div id="dialog-add-project" class="modal-back">
	<div class="modal-box border-rad6">
		<div class="modal-header">
		<h2>Добавление проекта</h2>
		<div id="dialog-add-project-but-close" class="but-close">
			<img src="img/but-close.png" alt="close">					
		</div>
		</div>
		<div class="modal-header-divider"></div>
		<div class="modal-body">
		<form action="" id="add-project">
			<label for="name" class="form-label">Название проекта</label>
			<input type="text" class="form-input" id="name" name="proj-name" placeholder="Введите название">
			<label for="filename" class="form-label">Картинка проекта</label>
			<input type="text" class="form-input" id="filename" name="proj-filename" placeholder="Загрузите изображение">
			
			<label for="url" class="form-label">URL проекта</label>
			<input type="text" class="form-input" id="url" name="proj-url" placeholder="Добавьте ссылку">
			<label for="description" class="form-label">Описание</label>
			<textarea name="proj-desc" class="form-textarea" id="description" placeholder="Пара слов о Вашем проекте"></textarea>
			<input id="but-add-project" type="submit" value="Добавить" class="but-add-project">
		</form>
		</div>
	</div>
</div>


<?php require_once('footer.php');