<?php
/**
 * Autoloader
 * 
 * Licensed under WTFPL, so have at it.
 * 
 * @author    Nicholas Jordon
 * @link      https://github.com/ProjectCleverWeb
 * @copyright 2014 Nicholas Jordon - All Rights Reserved
 * @version   1.0.0
 * @license   http://www.wtfpl.net/
 */

/**
 * Simple PSR-4 autoloader
 * 
 * @codeCoverageIgnore
 */
spl_autoload_register(function ($class) {
	$prefix = 'projectcleverweb\\punchy';
	
	$prefix_len = strlen($prefix);
	if(strncmp($prefix, $class, $prefix_len) !== 0) {
		return;
	}
	
	$file = __DIR__.'/includes'.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, $prefix_len)).'.php';
	
	if(file_exists($file) && is_file($file)) {
		require_once $file;
	}
});
