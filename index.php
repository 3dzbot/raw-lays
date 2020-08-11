<?php

$script_dir1 = realpath(dirname(__FILE__));
$script_dir2 = realpath($_SERVER['DOCUMENT_ROOT']);
$subdir = trim(substr($script_dir1, strlen($script_dir2)), "/\\");

$request_scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';

$site_url = $request_scheme.'://'.$_SERVER['HTTP_HOST'].'/';
//echo "<pre>";
//var_dump($_SERVER);exit();
//var_dump(substr($_SERVER['REQUEST_URI'], 0, strpos($request, '?')););
//exit();

if(!empty($subdir)){
	$site_url .= $subdir.'/';
	$request = substr($_SERVER['REQUEST_URI'], strlen('/'.$subdir));
} else {
	$request = $_SERVER['REQUEST_URI'];
}
//var_dump($_SERVER);exit();


//if((strpos($request, '?')) !== false ) {
//	$request = substr($request, 0, strpos($request, '?'));
//	$site_url .= $subdir.'/'.$request;
//} else {
//	if(!empty($subdir)){
//		$site_url .= $subdir.'/';
//		$request = substr($_SERVER['REQUEST_URI'], strlen('/'.$subdir));
//	} else {
//		$request = $_SERVER['REQUEST_URI'];
//	}
//}

//var_dump($request);
if($request === '/') $request = 'main';
if($request[0] === '/' && $request[12] === 'n' && $request[13] === '?') $request = 'registration';
if($request[0] === '/' && $request[1] === '?') $request = 'main';
$pages = ["registration", "gift", "fanpark", "scene", "city"];
foreach($pages as $p){
	if(strpos($request, $p) !== false && strpos($request, '?') !== false){
		$request = $p;
	}
}
$path = 'pages/'.$request.'.php';
//var_dump($request);
if(!file_exists($path)){
    header('Location: '.$site_url.'404');
    exit();}
if($request === '/404'){
    header($_SERVER["SERVER_PROTOCOL"]." 404 not found");
}



define('SITE_URL', $site_url);
define('PAGE', basename($path, '.php'));
// Ключ (Добавьте этот ключ в HTML-код сайта.)
define('reCAPTCHA_sitekey','6LepTbsZAAAAAKwCBqc5Cek1dZLaTQo5iN1oAJD6'); // если неопределена, то запрашиваться не будет
// Секретный ключ (Этот ключ нужен для связи между вашим сайтом и Google. Никому его не сообщайте)
define('reCAPTCHA_secretkey','6LepTbsZAAAAAKq0mXxrW513Ya-oLNID2oiVoLYU'); // получить здесь https://www.google.com/recaptcha/admin

require 'header.php';
include $path;
require 'footer.php';
