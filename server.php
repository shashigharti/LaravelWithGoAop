<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = urldecode($uri);

$paths = require __DIR__.'/bootstrap/paths.php';

$requested = $paths['public'].$uri;

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' and file_exists($requested))
{
	return false;
}

require_once $paths['public'].'/index.php';

// Initialize an application aspect container
$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(array(
    'debug' => true, // Use 'false' for production mode
    // Cache directory
    'cacheDir' => __DIR__ . './../cache/', // Adjust this path if needed
    // Include paths restricts the directories where aspects should be applied, or empty for all source files
    'includePaths' => array(
        __DIR__ . '/../src/'
    )
));
