<?php
require_once 'global.php';

respond(function($request, $response, $app) {
	global $__CONFIG;

	$response->__CONFIG = $__CONFIG;

	$response->onError(function($response, $err_msg) {
		$response->flash($err_msg);
		$response->back();
	});

	$app->db = new MysqliDB($__CONFIG['db']['hostname'],
							$__CONFIG['db']['username'],
							$__CONFIG['db']['password'],
							$__CONFIG['db']['name']);
	$app->db->set_charset($__CONFIG['db']['charset']);
});

/**
 * Root
 * The home route
 */
respond('/', function($request, $response) {
	$response->layout('views/template/default.php');
	$response->render('views/home.php', array('title' => 'Congratsulations!'));
});

/**
 * Docs
 * The documentation route
 */
respond('/docs', function($request, $response) {
	$response->layout('views/template/default.php');
	$response->render('views/documentation.php', array('title' => 'Documentation'));
});

/**
 * 404
 * Page not found route
 */
respond('404', function($request, $response) {
	$response->layout('views/template/default.php');
	$response->render('views/errors/404.php', array('title' => 'Page not found'));
});

// Add routes to pages
Page::add(array('/' => 'Home', '/docs' => 'Documentation')); // Global

dispatch(substr($_SERVER['REQUEST_URI'], strlen(APP_PATH)));
// ob_end_flush(); // end and flush output buffer






