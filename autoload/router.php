<?php
if(isset($_GET['contr']) && !empty($_GET['contr'])) {

	$contr = ucfirst(trim($_GET['contr']));

	if(file_exists(CONTROLLERS.$contr."Controller.php")){
		require_once CONTROLLERS.$contr."Controller.php";

		$class = ucfirst(trim($_GET['contr']));
		$method = trim($_GET['meth']);
		if(class_exists($class)){
          if(isset($method) && !empty($method)){
			$class::$method();
          }else{
          	$class::parrent();	
          }
		}else{
			echo 'ERROR Class';
		}
		

	
		
        

	}else{
		echo '404';
	}

}else{

	if(file_exists(CONTROLLERS."MainController.php")) {

		require_once CONTROLLERS."MainController.php";

		if(class_exists('Main')){

			Main::parrent();

	    }

	}else{

		echo 'ERROR';
	}
}
?>