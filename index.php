<?php

/*

@ CMS Fabrikana je aplikacija koji okuplja istomišljenike, čitaoce i autore
@ Ciljna grupa nam je globalna - latinica, ćirilica i engleski... sa proširenjima
@ Autor: Miloš Topličić
@ E-mail: milostoplicic@gmail.com

*/

// Section for integrating and preventing calls individual files
define ('ENTER', md5('fabrikana'));

// Development init
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Production init
/*
ini_set('display_errors', 0);
error_reporting(0);
*/

// Require files
require_once 'config.php';
require_once 'engine/classes/DB.class.php';
require_once 'engine/classes/Init.class.php';
require_once 'engine/classes/Decode.class.php';
require_once 'engine/classes/Content.class.php';
require_once 'engine/classes/Engine.class.php';

$init = new Init();
$init->Start();

$decode = new Decode;
echo $decode->Output();

?>