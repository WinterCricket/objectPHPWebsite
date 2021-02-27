<?php 

abstract class Animal{
	public $name;
	public $color;

	public function describe(){
		return $this->name. ' is ' .$this->color;
	}
	abstract public function makeSound();
}

 