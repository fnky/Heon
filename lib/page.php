<?php

/**
* Page Handler Class
*
* Handles pages that should be added to navigation
*/
class Page
{

	public static $pages = null;

	/**
	 * Adds a page to the pages
	 * @param mixed $routes A string or an array with routes
	 * @param string $type  Adds the routes to the specified type group
	 */
	public static function add($routes, $type = null) {

		if( is_array($routes) ) {
			( isset($type) && $type !== null ) ? self::$pages[$type] = $routes : self::$pages['__GLOBALS'] = $routes;
			return;
		}

		( isset($type) && $type !== null ) ? self::$pages[$type][] = $routes : self::$pages['__GLOBALS'][] = $routes;
	}

	/**
	 * Yields the added pages
	 * @param  string $type       The group type to yield from (optional)
	 * @param  function $callback The callback to be called for each page
	 * @return array              If callback is null it returns the pages as array.
	 */
	public static function yield($type = null, $callback = null) {
		if( isset($callback) && $callback !== null ) {
			if( isset($type) && $type !== null ) {
				foreach(self::$pages[$type] as $page => $name) {
					if( is_callable($callback) )
						$callback($page, $name);
				}
			} else {
				foreach(self::$pages['__GLOBALS'] as $page => $name) {
					if( is_callable($callback) )
						$callback($page, $name);
				}
			}
		} else {
			if( isset($type) && $type !== null ) {
				return self::$pages[$type];
			}

			return self::$pages['__GLOBALS'];
		}
	}

}