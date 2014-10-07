<?php
/**
 * Autoloaders
 */

/**
 * Simple PSR-4 autoloader for Punchy
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

/**
 * Composer Autoloader
 */
require_once(realpath(__DIR__.'/vendor/autoload.php'));
