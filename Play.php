<!--    	  	 
//      Name: Michael Shohdy 
//   	Course: 443
//   	Assignment: #4
--> 

<html>
<head><title>Towers of Hanoi</title>
<style type="text/css">
body {background:#BCBACC;text-align:center;}
h1 {font-style:italic;}
</style></head><body>
<h1>Towers of Hanoi</h1>

<?php

//Start a session in order to adjust the array values (from shifting/unshifting moves)
session_start();
if(!isset($_SESSION["pins"])){
	$_SESSION["pins"] = array("A" => array(0,1,2),"B"=> array(),"C"=> array());}
if(isset($_GET["Restart"])){
	$_SESSION["pins"] = array("A" => array(0,1,2),"B"=> array(),"C"=> array());}

/* 0 is red, 1 is yellow, 2 green */
/* 0 is the smallest, 1 is medium, 2 is large */
/* The 0-th element is the top, everything else bottom */

//condition1 : a pin must have a disk or nothing can be moved
//condition2 : the pin a disk will move to can be empty or can have higher disk val
//condition2 : a larger disk cannot go over a smaller disk
//in order to move an element, shift and unshift functions will be used

$pin = $_SESSION["pins"]; //set pin to session so that arrays may be used to this variable

if((count($pin[$_GET["from"]]) > 0) && (count($pin[$_GET["to"]]) >= 0)
	|| ($pin[$_GET["from"]][0] < $pin[$_GET["to"]][0]) )
{
	if($_GET["from"]==true && $_GET["to"]==true){
	//case where a a larger disk tries to go on top of a smaller one
	if($pin[$_GET["from"]][0] > $pin[$_GET["to"]][0]){
		//if the pin array val is empty then the move is legal
		if(empty($pin[$_GET["to"]])){
			$res = array_shift($pin[$_GET["from"]]);
			array_unshift($pin[$_GET["to"]],$res);}	
	}else{
		//all other moves
		$res = array_shift($pin[$_GET["from"]]);
		array_unshift($pin[$_GET["to"]],$res);
	}}
}
//saves the session from a single move of $pin into a new script
$_SESSION["pins"] = $pin;

?>

<!-- echo pin values to draw.php as string -->
<!-- A=0,1,2&B=&C=   -->
<img src="Draw.php?A=<?php echo implode(",",$pin["A"]);?>&B=<?php echo implode(",",$pin["B"]);?>&C=<?php echo implode(",",$pin["C"]);?>">
<br>

<?php
//test for completion
if($pin["C"] != array(0,1,2)){

	echo "<form action='Play.php' method='GET'>";
	echo "Move a disk from pin <input type='text' name='from' size='3'>";
	echo "to pin <input type='text' name='to' size='3'>";
	echo "<input type='submit' value='Move'>";
	echo "</form>";
}
elseif($pin["C"] == array(0,1,2)){
	//congratz
	echo "<form action='Play.php' method='GET'>";
	echo "Congratulations! You have solved the puzzle!";
	echo "<br><input type='submit' value='Restart'>";
	echo "<br><input type='hidden' name='Restart' value='Restart'>";
	echo "</form>";
	$restart = $_SESSION["Restart"];
}
?>
</body>
</html>