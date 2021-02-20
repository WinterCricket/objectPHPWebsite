<?php 
//class and magic methods

class First{
	
	public $id = 3443;
	public $name = 'Morris Flann';

	// public function __set(){

	// }

	public function utterance($word){
		echo $word;
	}

}

class Second extends First{
	function synth($name, $id){

		echo 'My name is '.$this->name.'. My id is '.$id.'.';
	}
		
	}


$second = new Second;
// echo $second->synth('','').$second->utterance('To the wrong nose, a rose stinks.');
echo $second->name.'<br>';
$second->utterance('Girly greedy guts!<br>');