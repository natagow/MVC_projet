<?php

define('VIEW', 'Views/');


require_once(VIEW . 'header.php');

$action= isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';

switch ($action){
	case 'accueil':
		require_once(VIEW . 'accueil.php');
		break;
	case 'presenation':
		require_once(VIEW . 'presentation.php');
		break;
	case 'stock':
		require_once(VIEW . 'stock.php');
		break;
	case 'contact':
		require_once(VIEW . 'contact.php');
		break;
	default '404':
		require_once(VIEW . '404.php');
		break;
}

require_once(VIEW . 'footer.php');

?>