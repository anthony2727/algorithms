<?php 

//A palindromic number reads the same both ways. The largest palindrome made from 
//the product of two 2-digit numbers is 9009 = 91 × 99.
//Find the largest palindrome made from the product of two 3-digit numbers.


function paliProduct ($digit){
	$largest =  9 * pow(10, $digit);
	$copy = $larges;

	

}

function isPalidrome($number){
	$dev = 0;
	$cNumber = $number;
	while($number>0){
		$nValue = $number%10;
		$dev = $dev * 10 + $nValue;
		echo $dev."\t\n";
		$number = (int)($number/10); //Normally, a floating point from a division. Casting to an int.
		
	}
	if($dev!=0 && $dev==$cNumber)
		return true;
	return false;
}

var_dump(isPalidrome(1001));