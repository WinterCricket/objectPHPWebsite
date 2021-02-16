
<?php 

// $myVar1 = 'Hello';
// $myVar2 = 'Worldly Dane';
// $space = ' ';
// echo $myVar1.$space.$myVar2;

 $numbers = array(12, 88, 2, 34, 16);

// print_r($numbers[3]);

// echo $numbers[3];

//associated array

$ages = array(

	"John" => 48,
	"Horace"=> 2908,
	"Robin" => 9
);

// //echo $ages['Horace'];

// echo count($ages);

 // $i = 1;
 // while($i <=10){
 // 	echo "This little piggy number ".$i." went to market. <br/>";
 // 	$i++;
 // }

 //foreach loop is for arrays

 foreach($numbers as $number){
 	echo 'This is number '.$number.' for the party. <br>';
 }

 foreach($ages as $name => $age){
 	echo 'This is '.$name.', who is '. $age. ' years old.<br>';
 }

 ?>