<?php

// Protection
if (!defined('ENTER')){die('Denied access!');}

class Init {
	
	public function __construct() {

		if (session_id() === '') {
			
			session_start();
			ob_start();
		} else {
			
			ob_start();
		}
	}
	
	public function Start() {
		
        if (isset($_COOKIE[SITE])) {

            $data = self::DataFromCookie();

            if ($data === false) {

                die ('Your cookie is invalid, restart your browser or delete the cache!');
            } else {

                if (isset($_SESSION[SITE])) {

                    // ok
                } else {

                    $_SESSION[SITE] = array(

                        'session'       => $data['session'],
                        'usertype'      => $data['usertype'],
                        'username'      => $data['username']
                    );
                }
            }
        } else {

            if (isset($_SESSION[SITE])) {

                // ok
            } else {

                $_SESSION[SITE] = array(

                    'session'       => md5(microtime(true)),
                    'usertype'      => 0,
                    'username'      => ''
                );
            }
        }
	}

	static private function DataFromCookie() {

        $link = new DB();
        $query = "SELECT * FROM users WHERE session = ?";
        $result = $link->GetRow($query, [$_COOKIE[SITE]]);

        if (empty($result)) {

            return false;
        } else {

            return $result;
        }
    }
}

?>