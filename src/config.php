<?php
/**
 * Configuration
 */

if (count(get_included_files()) == 1) {
	header('HTTP/1.0 403 Forbidden');
	exit(0);
}

return array(
	'Database Host'   => '',
	'Database Name'   => '',
	'Database User'   => '',
	'Database Pass'   => '',
	'Database Prefix' => '',
	
	/*** WARNING: Dragons Ahead! Edit what is below at your own risk ***/
	'System Path'     => 'system',
	'Public Path'     => 'public',
	'Debug'           => FALSE
);
