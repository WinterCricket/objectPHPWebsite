<?php 
//class and magic methods

class First{
	
	public $id = 3443;
	protected $name = 'Morris Flann';

	// public function __set(){

	// }

	public function utterance($word){
		echo $word;
	}

}

class Second extends First{
	public function synth(){
		echo $this->name;
	}

}


$second = new Second;

echo $second->synth().'<br>';
echo $second->utterance('Girly greedy guts!<br>').$second->id;