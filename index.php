<?php session_start();
ob_start();

//setcookie('auth', false, time()-3600);

if(file_exists($_SERVER['DOCUMENT_ROOT'].'/config/config.php')){

    require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
    require ROOT.'core/init.php';

}else{

		echo ("Отсутствует конфиг");
		
}








