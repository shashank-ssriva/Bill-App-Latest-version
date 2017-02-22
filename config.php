<?php
require_once 'messages.php';
//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/index.php');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', 'mysql');
define( 'DB_NAME', 'cabBills');
//Google App Details
define('GOOGLE_APP_NAME', 'ExClaiMadEasy');
define('GOOGLE_OAUTH_CLIENT_ID', '31964366332-msqncs9314933rsir11u1tvijolistta.apps.googleusercontent.com');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'mKug1w8Ne1OmPiewX4YrFVOy');
define('GOOGLE_OAUTH_REDIRECT_URI', 'http://localhost/');
define("GOOGLE_SITE_NAME", 'http://localhost/');
function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
