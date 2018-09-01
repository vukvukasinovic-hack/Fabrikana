<?php

// Protection
if (!defined('ENTER')){die('Denied access!');}

class Content {
	
	public function __construct() {

		require_once 'public/temp/index.php';
	}

	static public function Body() {

		$body = self::Menu().self::Main().self::Right().self::Footer();
		
		return $body;
	
	}

	static private function Menu() {

	}

	static private function Main() {

	}

	static private function Right() {

	}

	static private function Footer() {
		
		if (LANG === 'en') {

			require 'lang/en.php';
		} else if (LANG === 'cir' OR LANG === 'lat') {

			require 'lang/sr.php';
		}

		require_once 'public/temp/footer.php';

		return $footer;
	}
}

?>
