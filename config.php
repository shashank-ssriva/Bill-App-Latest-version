<?php
require_once 'messages.php';
//site specific configuration declartion
define( 'BASE_PATH', 'Applicationś Home Page');
define( 'DB_HOST', 'DB_HOST' );
define( 'DB_USERNAME', 'DB_USERNAME');
define( 'DB_PASSWORD', 'DB_PASSWORD');
define( 'DB_NAME', 'DB_NAME');
//Google App Details
define('GOOGLE_APP_NAME', 'Google Project Name');
define('GOOGLE_OAUTH_CLIENT_ID', 'Google Client ID');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'Secret Key');
define('GOOGLE_OAUTH_REDIRECT_URI', 'URI');
define("GOOGLE_SITE_NAME", 'Site Name');
function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
