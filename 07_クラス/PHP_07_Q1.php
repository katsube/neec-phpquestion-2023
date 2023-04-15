<?php
class Cat{
	const TAIL_WORD = 'にゃーん';

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
}

