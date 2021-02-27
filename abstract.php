<?php 

abstract class Animal{
	public $name;
	public $color;

	public function describe(){
		return $this->name. ' is ' .$this->color;
	}
	abstract public function makeSound();
}

class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makeSound(){
		return ' Quack!';
	}
}

class Giraffe extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makeSound(){
		return ' Geergeer!';
	}
}
 //call
$animal = new Duck();
$animal->name = 'Mallard May';
$animal->color = 'Green and Black';
echo $animal->describe();
echo $animal->makeSound();