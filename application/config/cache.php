<?php defined('SYSPATH') or die('No direct script access.');

/**
* CACHE CONFIGURATION
*/

/**
 * Enable or disable file caching. This makes pages display faster
 * but can take a large amount of storage space on larger sites
 */
$config['cache_pages'] = TRUE;

if (@!is_writable(APPPATH.'cache'))
{
	$config["cache_pages"] = FALSE;
}

/**
 * CONFIGURATION
 * 'file' driver can be substituted for:
 *  -> Memcache - Memcache is very high performance, but prevents cache tags from being used.
 *  -> APC - Alternative Php Cache
 *  -> Eaccelerator
 *  -> Xcache
 */
#$config['default'] = array(
#	'driver' => 'apc',
#	'params' => APPPATH.'cache',
#	'lifetime' => 1800,
#	'requests' => -1
#);


/**
 * Content Distribution Network (CDN) Configuration
 * Use a content distribution network to serve up
 * JS or CSS files
 */
$config['cdn_css'] = "";
$config['cdn_js'] = "";
