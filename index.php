<?php 
//class and magic methods

class First{
	
	private $id = 3443;
	public $name = 'Morris Flann';

	// public function __set(){
		
	// }

	public function utterance(){
		echo 'Say something for the sake of utterance!';
	}

}

class Second extends First{
	public function synth($name, $id){

		echo 'My name is '.$this->name.'. My id is '.$this->id.'.';
		
	}
}

$second = new Second;
echo $second->synth('','').$second->utterance();
