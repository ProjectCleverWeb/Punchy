<?php

namespace projectcleverweb\punchy;

class main {
	
	public static function init() {
		error_reporting(E_ALL & ~E_CORE_WARNING);
		self::init_error_handler();
		
		display::page();
	}
	
	public static function init_error_handler() {
		$whoops = new \Whoops\Run;
		$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
		$whoops->register();
	}
	
	public static function debug() {
		$info = array(
			'Server' => $_SERVER,
			'Env'    => $_ENV,
			'Post'   => $_POST,
			'Get'    => $_GET,
			'Cookie' => $_COOKIE
		);
		echo "<h1>Debug Info</h1>";
		foreach ($info as $key => $value) {
			printf('<h3>%1$s</h3><pre>%2$s</pre>', $key, print_r($value, TRUE));
		}
	}
	
}
