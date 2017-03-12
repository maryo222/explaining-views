
<?php

$page['name'] = !empty($_GET['page']) ? $_GET['page'] : '';

switch ($page['name']) {
	
	case 'about':
	require 'about.php';
	break;

	case 'contact':
	require 'contact.php';
	break;
	
	case 'home':
	default: 
	require 'home.php';
	break;

}
