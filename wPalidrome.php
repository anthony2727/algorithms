<?php 

// Solution for the Palindrome problem 
// Best solution using the strrev() function.
// AUTHOR: Anthony Rodriguez

function isPal($w){

	if(preg_match("/[a-z]+/",$w)){
		$w=strtolower((trim($w)));
		$rev = strrev($w);
		if($rev===$w)
			return true;
	}
	return false;	
}
$o ="olo Olo";
print isPal($o) ? "\"$o\" is a Palindrome\t\n" : "\"$o\" is not a Palindrome\t\n" ;