<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Debug: log the request
file_put_contents('php://stdout', "Request URI: $uri\n");
file_put_contents('php://stdout', "File path: " . __DIR__.$uri . "\n");
file_put_contents('php://stdout', "File exists: " . (file_exists(__DIR__.$uri) ? 'YES' : 'NO') . "\n");

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.$uri)) {
    return false;
}

require_once __DIR__.'/index.php';