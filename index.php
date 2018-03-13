<?php

define('VIEW', 'Views/');


require_once(VIEW . 'header.html');

$action= isset($_GET['action']) ? htmlentities($_GET['action']) : '';

switch ($action){
	case 'accueil':
		require_once(VIEW . 'accueil.html');
		break;
	case 'presentation':
		require_once(VIEW . 'presentation.html');
		break;
	case 'stock':
		require_once(VIEW . 'stock.html');
		break;
	case 'contacts':
		require_once(VIEW . 'contacts.html');
		break;
	default:
		require_once(VIEW . '404.html');
		break;
}

require_once(VIEW . 'footer.html');

?>
