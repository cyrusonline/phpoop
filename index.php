<?php

class Baddie
{
	public $evilness = 10;
	public $name;
	
	
	public function __construct($evilness, $name){
		$this->evilness = $evilness;
		$this->name = $name;
		
	}
	public function sayHi() {
		echo "Hi";
	}
	
	public function getEvilness(){
		return $this->evilness;
	}
	
	public function makeMoreEvil(){
		++$this->evilness;
		return $this->evilness;
	}
}

$ganon = new Baddie(8, "Baddie1");
$gooo = new Baddie(99, "Soccer");
var_dump($ganon);
/*
 * echo $ganon->sayHi();
echo "<br>";
echo $ganon->getEvilness();
echo "<br>";
echo $ganon->makeMoreEvil();

$gooo = new Baddie;
 */
echo "<br>";
echo $ganon->evilness;
echo $ganon->name;
echo "<br>";
echo $gooo->evilness;
echo $gooo->name;


?>