<?php 

/*set your website title*/

define('WEBSITE_TITLE', "Mercy College School Managment System Software");

/*set database variables*/

define('DB_TYPE','mysql');
define('DB_NAME','phpshopmvc'); 
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','127.0.0.1');

/*protocol type http or https*/

define('PROTOCAL', 'http');
/*root and asset paths*/

$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . DIRECTORY_SEPARATOR);
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
//$path = $_SERVER['REQUEST_URI'];
//$path =str_replace($path);
define('ROOT', str_replace("app/core/", "", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));
define('IMGROOT',  str_replace("app/core", "public/assets/img/", $path));
// This is to access file from management base
define('PATHROOT', str_replace("app/core", "public", $path));
//$j = PROTOCAL.$_SERVER['SERVER_NAME'];
//print_r($pa);
/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG',true);

if(DEBUG)
{
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}