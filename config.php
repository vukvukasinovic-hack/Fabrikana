<?php

// Protection
if (!defined('ENTER')){die('Denied access!');}

// Database data
define ('HOSTNAME', 'localhost');
define ('USERNAME', 'root');
define ('PASSWORD', '');
define ('DATABASE', 'cms-fabrikana');

// Website address for external links and access
define ('URL', 'https://fabrikana.com/');

// Address for internal links (folder on server) if root folder then / if subfolder then /folder/
define ('ROOT', '/Fabrikana/');

// Favicon
define ('FAVICON', ROOT.'favicon.png');

// CSS Style
define ('STYLE', ROOT.'public/css/style.css');

// Name of cookie for sessions and cookies
define ('SITE', 'cmsfabrikana');

// Define homepage
define ('HOMEPAGE', 'blog');

// Define default lang
define ('DEFAULTLANG', 'en'); // en, cir, lat

// Define Online pause for counter
define ('PAUSE', 600);

// LIMIT post per page
define ('LIMIT', 20);

// Define content variables

// LANG
if (Vars()[1][0] === 'cir') {

	define ('LANG', 'cir');
} else if (Vars()[1][0] === 'lat') {

	define ('LANG', 'lat');
} else if (Vars()[1][0] === 'en') {

	define ('LANG', 'en');
} else {

	define ('LANG', DEFAULTLANG);
}

// C1
if (isset(Vars()[1][1]) AND Vars()[1][1] != '') {
	
	define ('C1', Vars()[1][1]);
} else {
	
	define ('C1', HOMEPAGE); // Default page
}

// C2
if (isset(Vars()[1][2])) {
	
	define ('C2', Vars()[1][2]);
} else {
	
	define ('C2', '');
}

// C3
if (isset(Vars()[1][3])) {
	
	define ('C3', Vars()[1][3]);
} else {
	
	define ('C3', '');
}

// C4
if (isset(Vars()[1][4])) {
	
	define ('C4', Vars()[1][4]);
} else {
	
	define ('C4', '');
}

// C5
if (isset(Vars()[1][5])) {
	
	define ('C5', Vars()[1][5]);
} else {
	
	define ('C5', '');
}

// System for variables
function Vars() {
	
	// Automatically install the root of the folder
	$folder = $_SERVER['SCRIPT_NAME'];
	$folder = preg_replace('#/+#', '/', $folder);
	$folder = explode ('/', $folder);
	array_pop($folder);
	$folder = implode ('/', $folder);
	
	// Variables on the site
	$lf = mb_strlen($folder);
	$path = $_SERVER['REQUEST_URI'];
	$path = mb_substr($path, $lf);
	$path = explode('/', $path);
	array_shift($path);
	
	$vars[0] = $folder.'/'; // ne koristi se
	$vars[1] = $path;

	return $vars;
}

?>
