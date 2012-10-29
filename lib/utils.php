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
}