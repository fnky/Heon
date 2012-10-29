<?php

/**
* Util Class
*/
class Utils {

	/**
	 * Listens if the current route is the specified one.
	 * @param  string $page The route to listen for
	 * @return string       Returns a class name
	 * @todo  Make this more friendly for any type of element (not only classes)
	 */
	public static function listen($route) {
		return (substr($_SERVER['REQUEST_URI'], strlen(APP_PATH)) === $route) ? 'class="active"' : '';
	}

	/**
	 * Dumps pre-formatted mixed types
	 * @param  mixed $mixed The type to dump
	 */
	public static function debug($mixed = null) {
		echo '<pre>';
		var_dump($mixed);
		echo '</pre>';
	}

	/**
	 * Creates the directory
	 * the script die()'s if mkdir() fails
	 * @param  string $directory
	 */
	function createDirectory($directory) {
		if(!@mkdir(buildPath($directory))) {
			die("FAILED to create directory\n");
		}
	}

	/**
	 * Create a file for the example with the given $content
	 * @param  string $directory Directory without / at the end
	 * @param  string $filename  Filename without path and extension
	 * @param  string $extension Extension of the file without "."
	 * @param  string $content   The content of the file
	 */
	public static function createFile($directory, $filename, $extension, $content = "") {
		$handle = @fopen(buildPath($directory, $filename, $extension), "w");
		if($handle) {
			fwrite($handle, $content);
			fclose($handle);
		} else {
			die("FAILED to create file\n");
		}
	}
}