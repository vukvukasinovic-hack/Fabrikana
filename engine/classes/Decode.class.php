<?php

// Protection
if (!defined('ENTER')){die('Denied access!');}

class Decode {
	
	public function Output() {

		$content = new Content();

		$content = ob_get_contents();
		ob_end_clean();

		$content = self::Converter($content);
		
		//$content = self::Compress($content);

		if (LANG === 'lat') {
			
			$content = self::Transliteration($content);	
		}
		
		return $content;
	}

	static private function Converter($input) {
		
		$conversion_table = self::ConversionTable();

		$output = strtr ($input, $conversion_table);
		
		return $output;
	}

	static private function ConversionTable() {

		$c 				= self::MetaHeader();
		$body			= Content::Body();

		return $conversion_table = array (
			
			"{%html_lang%}"			=> $c['html_lang'],
			"{%charset%}"			=> $c['charset'],
			"{%description%}"		=> $c['description'],
			"{%keywords%}"			=> $c['keywords'],
			"{%author%}"			=> $c['author'],
			"{%title%}"				=> $c['title'],
			"{%favicon%}"			=> FAVICON,
			"{%style%}"				=> STYLE,
			"{%body%}"				=> $body
		);
	}
	
	static private function MetaHeader() {

		$link = new DB();

		if (LANG === 'en') {

			$tab = 'ensite';
		} else if (LANG === 'lat' OR LANG === 'cir') {

			$tab = 'srsite';
		}

		$query = "SELECT * FROM $tab WHERE tabid = 1";
		$result = $link->GetRow($query);

		return $result;
	}

	static private function Compress($input) {

		$content = str_replace(array("\r\n", "\r"), "\n", $input);
		$lines = explode("\n", $content);
		$new_lines = array();

		foreach ($lines as $i => $line) {
		    
		    if(!empty($line)) {
		        $new_lines[] = trim($line);
		    }
		}

		$content = implode($new_lines);

		return $content;
	}

	static private function Transliteration($input) {
		
		$transliteration_sr_ci_la = self::TransliterationTable();

		$output = strtr ($input, $transliteration_sr_ci_la);

		return $output;
	}

	static private function TransliterationTable() {
		
		$transliteration_sr_ci_la = array (
			
			"А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Ђ" => "Đ", "Е" => "E", "Ж" => "Ž", "З" => "Z", "И" => "I", 
			"Ј" => "J", "К" => "K", "Л" => "L", "Љ" => "LJ", "М" => "M", "Н" => "N", "Њ" => "NJ", "О" => "O", "П" => "P", "Р" => "R", 
			"С" => "S", "Т" => "T", "Ћ" => "Ć", "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "C", "Ч" => "Č", "Џ" => "DŽ", "Ш" => "Š", 

			"а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "ђ" => "đ", "е" => "e", "ж" => "ž", "з" => "z", "и" => "i", 
			"ј" => "j", "к" => "k", "л" => "l", "љ" => "lj", "м" => "m", "н" => "n", "њ" => "nj", "о" => "o", "п" => "p", "р" => "r", 
			"с" => "s", "т" => "t", "ћ" => "ć", "у" => "u", "ф" => "f", "х" => "h", "ц" => "c", "ч" => "č", "џ" => "dž", "ш" => "š", 

			"Ља" => "Lja", "Ље" => "Lje", "Љи" => "Lji", "Љо" => "Ljo", "Љу" => "Lju", 
			"Ња" => "Nja", "Ње" => "Nje", "Њи" => "Nji", "Њо" => "Njo", "Њу" => "Nju", 
			"Џа" => "Dža", "Џе" => "Dže", "Џи" => "Dži", "Џо" => "Džo", "Џу" => "Džu"
		);

		return $transliteration_sr_ci_la;
	}
}

?>