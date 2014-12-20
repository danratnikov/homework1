<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('DBNAME', 'hw1');
define('PASS', 'r');


$data_sql = array(
	'get_portfolio' => 'select id, title, img, url, description from portfolio'
);

function getPDO () {
	$pdo = new PDO('mysql:host='.HOST.";dbname=".DBNAME, USER);
	return $pdo;
}

function getDataAsArray (PDO $pdo, $sql) {
	$result = $pdo->query($sql);
	return $result->fetchAll(PDO::FETCH_ASSOC);
}

function isAdmin() {
	return true;
}