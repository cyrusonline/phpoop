<?php

class Baddie
{
	public $evilness = 10;
// 	public $name;
	
	
// 	public function __construct($evilness, $name){
// 		$this->evilness = $evilness;
// 		$this->name = $name;
		
// 	}
	
	
// 	public function __destruct(){
// 		echo "A ".__CLASS__." has been destroyed";
		
		
// 	}
	
// 	public function __toString(){
// 		echo $this->name;
// 	}
	
	
// 	public function sayHi() {
// 		echo "Hi";
// 	}
	
// 	public function getEvilness(){
// 		return $this->evilness;
// 	}
	
// 	public function makeMoreEvil(){
// 		++$this->evilness;
// 		return $this->evilness;
// 	}

	public function increaseEvilness(){
		++$this->evilness;
		
	}

}


class Boss extends Baddie{
	
	public $evilness = 50;
	public function __destruct(){
		echo "You beat the boss";
	}
}

$ganon = new Baddie(8, "Baddie1");
$gooo = new Boss();
var_dump($gooo);
//echo $ganon;

unset($gooo);

// unset($ganon);
//$gooo = new Baddie(99, "Soccer");
//var_dump($ganon);
/*
 * echo $ganon->sayHi();
echo "<br>";
echo $ganon->getEvilness();
echo "<br>";
echo $ganon->makeMoreEvil();

$gooo = new Baddie;
 */
// echo "<br>";
// echo $ganon->evilness;
// echo $ganon->name;
// echo "<br>";
// echo $gooo->evilness;
// echo $gooo->name;


?>