<?php
class PostCatcher{

	public $array_request;
	public $array_list;

	public function __construct($array_request){
     
           $this->array_request = $array_request;
    		$this->getList();
	}

	public function getList(){

		require_once(ROOT.'config/access_list.php');
		$this->array_list = $access_list;
		$this->findList();

		//print_r($this->array_list);
		//echo '<br />';
		//print_r($this->array_request);


	}

	public function findList(){
		$match = false;

		foreach ($this->array_request as $key => $value) {
			
			if(in_array($key, $this->array_list)){
				
			}else{
				$match = true;
			
				unset($_POST[$key]);
			}


		}

		if($match) {
		   echo "Error Exception Post data";
		}

	}

}

$catcher = new PostCatcher($_POST);








?>