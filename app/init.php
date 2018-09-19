<?php 
session_start();

require_once 'core/App.php';
require_once 'core/Controller.php';

define('ASSET_ROOT', 
	'http://'.$_SERVER['HTTP_HOST'] . str_replace(
		$_SERVER['DOCUMENT_ROOT'], '', 
		str_replace(
			'\\', '/', dirname(__DIR__)
		)
	).'/public'
);

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DATA', 'mca-mini-project');
