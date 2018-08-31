<?php

// Protection
if (!defined('ENTER')){die('Denied access!');}

class Content {
	
	public function __construct() {

		require_once 'look/temp/index.php';
	}

	static public function Body() {

		return '<h1>Ја сам садржај!!!</h1>';
	}

	static private function Menu() {

	}

	static private function Main() {

	}

	static private function Right() {

	}

	static private function Footer() {
	
	}
}

?>