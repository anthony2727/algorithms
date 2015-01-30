<?php 

// Return a reversed sentence.
// The best solution using the array_reverse function

function rev ($ss){

	
	$sa = explode(' ', $ss);
	return implode(" ",array_reverse($sa));
}

print rev("Beautiful is life");