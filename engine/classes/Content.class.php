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
		
		$c1 = (C1 == '') ? '' : '/'.C1;
		$c2 = (C2 == '') ? '' : '/'.C2;
		$c3 = (C3 == '') ? '' : '/'.C3;
		$c4 = (C4 == '') ? '' : '/'.C4;
		$c5 = (C5 == '') ? '' : '/'.C5;
		
		if (LANG === 'en') {

			require 'lang/en.php';
		} else if (LANG === 'cir' OR LANG === 'lat') {

			require 'lang/sr.php';
		}

		if ($_SESSION[SITE]['usertype'] == 0) {

			require_once 'public/temp/menu0.php';
		} else if ($_SESSION[SITE]['usertype'] == 1) {

			require_once 'public/temp/menu1.php';
		} else if ($_SESSION[SITE]['usertype'] == 2) {

			require_once 'public/temp/menu2.php';
		} else if ($_SESSION[SITE]['usertype'] == 3) {

			require_once 'public/temp/menu3.php';
		} else if ($_SESSION[SITE]['usertype'] == 4) {

			require_once 'public/temp/menu4.php';
		}

		return $menu;
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
