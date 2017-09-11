<?php
class authorisation{

	protected $post;

	public function __construct($post){

		$this->post = $post;
		$this->Protection();

	}

	public function Protection(){

		$connect = new Connect();
		$query = $connect->connect->query("SELECT * FROM en_admin WHERE en_login = '".$this->post['auth_login']."' ");
		$result = $query->fetch(PDO::FETCH_ASSOC);

		if(!empty($result['en_login'])) {
			$md5 = md5(md5($this->post['auth_login'].'+'.$this->post['auth_pass']));
		    
		    if($md5 == $result['en_hash']) {
		      	setcookie('auth', true, time()+3600);
		      	
		        header("Location: http://engine.loc/admin/");

		    }



		}


	}

}
$auth = new authorisation($_POST);


?>