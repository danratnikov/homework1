<!-- content container -->

	<div class="container">

		<!-- sidebar -->

		<div class="sidebar">
			<div class="menu border-rad3">
				<ul class="menu-list">
					<li class="menu-item"><a href="index.html">Обо мне</a></li>
					<li class="menu-item active"><a href="myworks.html">Мои работы</a></li>
					<li class="menu-item"><a href="contact_form.html">Связаться со мной</a></li>
				</ul>
			</div>
			<div class="contacts border-rad3">
				<h2>Контакты</h2>
				<ul class="contacts-list">
					<li class="contact-list-line post"><span class="post-icon"></span><a href="">pochta@mail.ru</a></li>
					<li class="contact-list-line tel"><span class="tel-icon"></span><a href="">+79812342323</a></li>
					<li class="contact-list-line skype"><span class="skype-icon"></span><a href="">nickname</a></li>
				</ul>
			</div>
		</div>

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
		<div class="modal-back">
		<div class="modal-box border-rad6">
			<div class="modal-header">
				<h2>Добавление проекта</h2>
				<div class="but-close">
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
