
<?php 

	//real world example of using class

class User{
	//method: function in a class
	//access identifiers public protected private

	public function __construct(){
		//echo 'Constructor Called<br>';
	}

	public function register(){
		echo 'User Registered';
	}

	public function login($username, $password){
		$this->auth_user($username, $password);
	}

	public function auth_user($username, $password){
		echo $username. ' is authenticated.';
	}

	public function __destruct(){
		//echo '<br>Destructor Called';
	}
}

$User = new User;
$User->login('Dog Meat', "fly@dowqn");

//$User->register();

 ?>
