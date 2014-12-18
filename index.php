<?php

session_start();

$page = $_GET['page'];


// Типа роутер

switch ($page) {
	case 'admin':
		require "admin.php";
		break;
	
	case 'works':
		require "works.php";
		break;
	
	case 'contacts':
		require "contacts.php";
		break;
	
	default:
		$page = 'about';
		require "about.php";
		break;
}