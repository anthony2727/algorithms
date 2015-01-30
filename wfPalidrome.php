<?php 
// Large solution for the Palindrome problem 
// Not recommended, but good for educational uses.
// AUTHOR: Anthony Rodriguez

function forcePalindrome($word){

	$w = str_split($word,1);
	$len = count($w);
	$m = (int)$len/2;

	for($i=0; $i<$m; $i++){
		if($w[$i]!=$w[$len-1])
			return false;
		$len--;
	}
	return true;

}
$q='cooc';
print forcePalindrome($q) ? "$q is a Palindrome!!\t\n" : "$q IS NOT A PALINDROME!\t\n";