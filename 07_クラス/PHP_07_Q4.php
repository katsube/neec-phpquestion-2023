<?php
$porsche = new Car('ポルシェ');
echo $porsche->getName();		// ポルシェと表示されて欲しい

class Car{
	public $name;

	function __construct($name){
		$name = $name;
	}

	function getName(){
		return $name;
	}
}