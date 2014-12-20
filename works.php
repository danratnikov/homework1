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
					

					<?php foreach ($portfolio as $work): ?>
					<li class="work-item">
						<div class="work-item-box border-rad5">
							<img src="<?php echo $work['img']; ?> " alt="">
							<div class="work-item-hover">
								<h4>
									<span><?php echo $work['title']; ?></span>
								</h4>								
							</div>
						</div>
						<a href="<?php echo $work['url']; ?> "><?php echo $work['url']; ?></a>
						<p><?php echo $work['description']; ?></p>
					</li>	
					<?php endforeach ?>
					
					<?php if ($admin == true): ?>
					<li class="work-item">
						<div class="add-work-item">
							<a href="" class="add-work-item-link">
								<img src="img/add-work-item-icon.png" alt="">
								<p>Добавить работу</p>
							</a>
						</div>
					</li>	
					<?php endif ?>
					
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
		<form action="" id="add-project">
			<div class="modal-body">
				<div id="message-error" class="input-error message-box">
					<h4>Ошибка!</h4>
					<p>Невозможно добавить проект</p>
				</div>
				<label for="name" class="form-label">Название проекта</label>
				<input type="text" class="form-input" id="name" data-name="название" name="proj_name" placeholder="Введите название">
				<div class="form-row">
					<label for="filename" class="form-label">Картинка проекта</label>
					<input type="text" class="form-input" id="filename"  data-name="имя файла" name="proj_filename" placeholder="Загрузите изображение">
					<div class="input-file">
						<input type="file" id="input-file" name="filename_from_input">
					</div>
				</div>
				<label for="url" class="form-label">URL проекта</label>
				<input type="text" class="form-input" id="url" name="proj_url" data-name="ссылку" placeholder="Добавьте ссылку">
				<label for="description" class="form-label">Описание</label>
				<textarea name="proj_desc" class="form-textarea" data-name="описание" id="description" placeholder="Пара слов о Вашем проекте"></textarea>
				<input id="but-add-project" type="submit" value="Добавить" class="but-add-project">
			</div>
		</form>
	</div>
	<div id="message-success" class="message">
		<div class="message-box message-success">
			<h4>Ура!</h4>
			<p>Проект добавлен!</p>			
		</div>
	</div>
</div>


<?php require_once('footer.php');