<?php

/*
* Класс подключения с базой данных
*
* Выполняет соединение с базой данных
*
*@author Intelegator Timur <intelegator_timur@ukr.net>
*@version 1.1
*@copyright Copyright (c) 2017, INT T
*@license http://www.php.net/license/3_01.txt PHP License 3.01
*/

class Templater{
	public $main;
	public $content;
	public $html;

	public function __construct(){
		if($_GET['contr'] == 'admin') {
		   if(isset($_COOKIE['auth']) && $_COOKIE['auth'] == true ) {
			$this->main = file_get_contents(BACK.'Main.tpl');
		   } else {
		   	$this->main = file_get_contents(BACK.'AdminForm.tpl');
		   }
		}
		
		if($_GET['contr']  != 'admin') {
		$this->main = file_get_contents(FRONT.'Main.tpl');
	    }
		return $this;
	}
	

    /*==================================FRONT====================================*/
	public function FrontReplace($page){
		
		if(file_exists(FRONT.$page.'.tpl')) {
		    $this->content = file_get_contents(FRONT.$page.'.tpl');
		    $this->html = str_replace('{content}', $this->content, $this->main);
            
            $this->html = str_replace('href="css/','href="'.HOST.'app/front/css/', $this->html);
            $this->html = str_replace('src="js/','src="'.HOST.'app/front/js/', $this->html);
            $this->html = str_replace('src="images/','src="'.HOST.'app/front/images/', $this->html);
           
	    }else{
	    	exit('tpl file not found');
	    }
	    return $this;
	}




   /*==================================BACK====================================*/
	public function BackReplace($page){
		
		if(file_exists(BACK.$page.'.tpl')) {
		    $this->content = file_get_contents(BACK.$page.'.tpl');
		    $this->html = str_replace('{content}', $this->content, $this->main);

		    $this->html = str_replace('href="css/','href="'.HOST.'app/back/css/', $this->html);
            $this->html = str_replace('src="js/','src="'.HOST.'app/back/js/', $this->html);
            $this->html = str_replace('src="images/','src="'.HOST.'app/back/images/', $this->html);

	    }else{
	    	exit('tpl file not found');
	    }
	    return $this;
	}




	public function View(){
		echo $this->html;
	}

}


?>