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

class Connect{

/*
* Свойство $host, определяет хост, на котором храниться база данных
* @var string 
* @access protected
*/
	protected $host = 'localhost';
/*
* Свойство $user, определяет пользователя в базе данных
* @var string 
* @access protected
*/
	protected $user = 'root';
/*
* Свойство $pass, определяет пароль к базе данных
* @var string 
* @access protected
*/
	protected $pass = '';
/*
* Свойство $database, определяет таблицу в базе данных
* @var string 
* @access protected
*/
	protected $database = 'engine';
/*
* Свойство $connect, получает объект подключения к базе данных
* @var object
* @access public
*/
    public $connect;

/*
* Метод __construct, выполняет запись в свойство $connect подключение к базе данных
* @access public
* 
*/
	public function __construct(){
		$this->connect = new PDO("mysql:host=".$this->host."; dbname=".$this->database.";",$this->user,$this->pass);
	}
}

/*$connect = new Connect();

$pdo = $connect->connect;

$pdo->query("asdasdas")->fetch();*/



?>