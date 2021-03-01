<?php  

class People{
	public $person1 = "Shelly Duvall";
	public $person2 = "Rain McCain";
	public $person3 = "Mike Sykes";

	protected $person4 = "Walker T. Milktoast";
	private $person5 = "Flannery O'Dirt";

	// function iterateObject(){
	// 	foreach($this as $key => $value){
	// 		print "$key => $value\n";
	// 	}
	// }
}
$people = new People;

foreach($people as $key => $value){
			print "$key => $value\n";
		}

//$people->iterateObject();

