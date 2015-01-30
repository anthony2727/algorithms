<?php 


function isPal($w){

	if(preg_match("/[a-z]+/",$w)){
		$w=strtolower((trim($w)));
		$rev = strrev($w);
		if($rev===$w)
			return true;
	}
	return false;	
}
$o ="ala alA";
print isPal($o) ? "VICTOR MMG! \"$o\" is a Palindrome\t\n" : "shit, $o is not a fuckin Palindrome\t\n" ;