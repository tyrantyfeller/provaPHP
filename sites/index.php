<?php
if (!isset($_GET['route'])) {
	header("Location: ".$_SERVER['PHP_SELF']."?route=login/index");
}
$file = explode('/',$_GET['route'])[0];
$index = explode('/',$_GET['route'])[1];

if (file_exists(dirname(__FILE__).'/Controller/'.$file.'.php')) {
	require dirname(__FILE__).'/Controller/'.$file.'.php';

	$ob = new $file();
	$ob->$index();
} else {
	echo 'Arquivo não encontrado!';
}


