<?php

/**
 * Site Configuration
 */
	$__CONFIG['site'] = array(

		// The name of the site
		'name' => 'Heon'
	);

/**
 * Application Configuration
 */
	$__CONFIG['config'] = array(
		// URL - no trailing slashes
		'url' => 'http://example.com',

		// Application path - no trailing slashes (default: empty)
		'app_path' => '',

		// Developer mode - enables errors
		'devmode' => FALSE
	);

/**
 * Public Resource Configuration
 */

	$__CONFIG['resources'] = array(
		'assets' => array(
			'public' => 'assets/' // Public Assets
		)
	);

/**
 * Database Configuration
 */
	$__CONFIG['db'] = array(
		// Hostname for the database
		'hostname' => 'localhost',

		// Username for the database
		'username' => 'root',

		// Password for the database
		'password' => '',

		// Name of the database
		'name' => 'DATABASE',

		// The charset to use (default: UTF-8)
		'charset' => 'utf-8'
	);

	/* * * * * * * * * * * * *
	 *   No touching below   *
	 * * * * * * * * * * * * */

	// Define constants for faster access
	define('APP_PATH', $__CONFIG['config']['app_path']);
	define('URL', $__CONFIG['config']['url']);
	define('INDEV', $__CONFIG['config']['devmode']);

	// Resources
	define('ASSETS', APP_PATH . DS . $__CONFIG['resources']['assets']['public']);

	// Sets error reporting if in development mode
	( INDEV ) ? error_reporting(E_ALL) : error_reporting(0);

	// Writes a warning at top of page
	if( INDEV ) echo '<div style="color: #ad8f56; background-color: #f1d8a8; padding: 15px 20px;"><strong>Warning —</strong> You\'re currently in development mode.</div>';