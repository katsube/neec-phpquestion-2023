<?php
$tama = new Cat('タマ', 3);
$tama->age = 5;  // ★エラーにする
$tama->sayAge();

class Cat{
	const TAIL_WORD = "にゃーん";

	public $name;
	public $age;

	function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	function __destruct(){
		$this->say('おやすみなさい');
	}

	function say($message){
		echo $message . self::TAIL_WORD;
		echo "\n";
	}

	// Q2でsayAge()メソッドが追加されている
}

