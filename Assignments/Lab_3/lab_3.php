<?php

/**
 * @param $temp_in_c
 */
function tempWarning($temp_in_c)
{
	// Use an if else statement

	// Output the following text if the temp_in_c is above 32 degrees centigrade.
	if($temp_in_c > 32){
		echo "It's really hot out there, be careful!";
	}
	else if($temp_in_c < 7){
		// Alternately output if the temp_in_c is below 7 degrees centigrade

		echo "Brrrrr. Be sure to dress warmly.";
	}
}

/**
 * @param $a
 * @param $b
 * @param $c
 */
function quadraticEquation($a, $b, $c)
{
	// Use and if else statement

	$discrim = $b * $b - 4 * $a * $c;

	//if the discrim is less than zero echo the following
	if($discrim < 0)
		echo "The equation has no real roots!";
	elseif($discrim == 0){
		// if the discrim equals zero do the following

		$root = -$b / (2 * $a);
		echo "There is a double root at " . $root;
	}
	else if($discrim > 0){
		// if the discrim is greater than zero do the following

		$discRoot = sqrt($b * $b - 4 * $a * $c);
		$root1    = (-$b + $discRoot) / (2 * $a);
		$root2    = (-$b - $discRoot) / (2 * $a);
		echo "The solutions are: " . $root1 . "and " . $root2;
	}
}
/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author George Walter Colrove IV <gwc02050@vtc.vsc.edu>
 * @since 20150120
 */

/**
 * @param $letter
 */
function consinantOrVowel($letter)
{
	// Use a switch statement here
	switch($letter){
		case 'a': 
		case 'e': 
		case 'u': 
		case 'i': 
		case 'o': 
			echo $letter . " is a vowel";
			break;
		case 'q': 
		case 'w': 
		case 'r': 
		case 't': 
		case 'y': 
		case 'p': 
		case 's': 
		case 'd': 
		case 'f': 
		case 'g': 
		case 'k': 
		case 'l': 
		case 'z': 
		case 'x': 
		case 'c': 
		case 'v': 
		case 'b': 
		case 'n': 
		case 'm': 
			echo $letter . " is a consonant";
			break;
		default:
			echo $letter . " is not a vowel or a consonant";
	}

}

/**
 * @param $number
 */
function oddOrEven($number)
{
	// Use the modulus and ternary operator to echo whether the number is odd or even
	if($number%2 == 0)
		echo "even";
	else
		echo "odd";
}

function countByThree()
{
	// Create a for loop that counts by threes to ninety-nine and outputs every increment from 3 up to and including ninety-nine
	for($i = 0; $i < 100; $i = $i + 3)
	{
		echo $i;
		echo "<br>";
	}
}

/**
 * @param $count
 */
function indefiniteFactorialLoop($count)
{
	// write a loop that starts at 0 and calculates the factorial to to and including the value of count
	$factorial_product = 1;
	for($i = 1; $i < $count; $i++){
		$factorial_product = $factorial_product  * $i;
	}
	echo "The factorial is " . $factorial_product;

}

// Insert function calls below.
tempWarning(100);
echo "<br>";
quadraticEquation(1, 2, 1);
echo "<br>";
consinantOrVowel('d');
echo "<br>";
oddOrEven(10);
echo "<br>";
countByThree();
echo "<br>";
indefiniteFactorialLoop(10);


