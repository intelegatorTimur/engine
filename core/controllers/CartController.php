<?php
class Cart{
	public static function parrent(){
		 $templator = new Templater();
         $templator->FrontReplace('Cart')->View();

	}

}


?>