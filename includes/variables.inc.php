<?php

class ValidationExpressions {

	protected static $validationExpressions = array(
	    'name' => "/^[\w\s]+$/i",
	    'email' => "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i",
	    'gender' => "/[male|female]/",
	    'phone' => "/^([-\s\d.\/(\)+]*)$/i",
	    'default' => "/(.+)/i",
	);

	/**
	 *
	 * Constructor.
	 *
	 */
	private function __construct() {

	}

	/**
	 *
	 * Destructor.
	 *
	 */
	public function __destruct() {

	}

	private static function getExpression($name) {
		if (isset(self::$validationExpressions[$name])) {
			return self::$validationExpressions[$name];
		} else {
			return self::$validationExpressions['default'];
		}
	}

	public static function isValid($name, $value) {
		if (preg_match(self::getExpression($name), $value)) {
			return true;
		}
		return false;
	}
}