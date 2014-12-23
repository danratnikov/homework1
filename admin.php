<?php require("head.php") ?>

<body>
	<div class="wrapper">
		<form id="auth_form">
			<div class="form_container border-rad3">
				<h2>Авторизуйтесь</h2>
				<div class="modal-header-divider"></div>
				<div class="input-container">
					<label class="form-label" for="user-login">Логин</label>
					<input class="form-input" data-name="логин" type="text" name="user_login" placeholder="Введите логин">
					<label class="form-label" for="user-pass">Пароль</label>
					<input class="form-input" data-name="пароль" form-control" type="text" name="user_pass" placeholder="Введите пароль">
					<input type="submit" value="Войти" class="blue-button admin-submit">
				</div>
			</div>
		</form>			
	</div>
</body>



<?php include("footer.php") ?>