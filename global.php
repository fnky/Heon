<?php
	// ob_start(); // Start output buffer

	define('DS', DIRECTORY_SEPARATOR);
	define('BASE_PATH', dirname(realpath(__FILE__)) . DS);
	define('L', BASE_PATH . 'lib' . DS);
	define('A', BASE_PATH . 'app' . DS);
	define('C', A . 'config' . DS);

	// Configuration
	require C . 'application.php';

	// Libaries
	require L . 'mysqlidb.php'; // MysqliDB Class
	require L . 'utils.php'; // Utilities Class
	require L . 'page.php'; // Page Handler Class
	require L . 'klein.php'; // PHP Router

	startSession(); // Start the session
?>