<?php  
//it's not the class that is static but the methods and properties
class User{
	public static $minPassLength = 5;

	public static function validatePassword($password){
		if(strlen($password) >= self::$minPassLength){
			return true;
		} else {
			return false;
		}
	}
}

$password ='passY';

if(User::validatePassword($password)){
	echo 'Password is valid';
} else {
	echo 'Piss off, clown!';
}


