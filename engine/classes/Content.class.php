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
		
		if (LANG === 'en') {

			require 'lang/en.php';
		} else if (LANG === 'cir' OR LANG === 'lat') {

			require 'lang/sr.php';
		}

		if (C1 === HOMEPAGE) {

			require_once 'public/content/homepage.php';
		} else if (C1 === 'signin') {

			require_once 'public/content/signin.php';
		} else if (C1 === 'signup') {

			require_once 'public/content/signup.php';
		} else if (C1 === 'forgot') {

			require_once 'public/content/forgot.php';
		} else if (C1 === 'view') {

			require_once 'public/content/view.php';
		} else if (C1 === 'new') {

			require_once 'public/content/new.php';
		} else if (C1 === 'old') {

			require_once 'public/content/old.php';
		} else if (C1 === 'like') {

			require_once 'public/content/like.php';
		} else if (C1 === 'comment') {

			require_once 'public/content/comment.php';
		} else if (C1 === 'categories') {

			require_once 'public/content/categories.php';
		} else if (C1 === 'archive') {

			require_once 'public/content/archive.php';
		}

		return $main;
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
