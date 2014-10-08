<?php

namespace projectcleverweb\punchy;

class display {
	
	public static function page() {
		
		self::get_template('home');
		
	}
	
	public static function get_template($name) {
		$path = __DIR__.'/../templates/'.$name.'.php';
		if (file_exists($path) && is_file($path)) {
			require(realpath($path));
		}
	}
	
	public static function get_layout($name) {
		$path = __DIR__.'/../layouts/'.$name.'.php';
		if (file_exists($path) && is_file($path)) {
			require(realpath($path));
		}
	}
	
	public static function get_content($name) {
		$path = __DIR__.'/../contents/'.$name.'.php';
		if (file_exists($path) && is_file($path)) {
			require(realpath($path));
		}
	}
	
}
