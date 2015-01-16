<?php 

//A palindromic number reads the same both ways. The largest palindrome made from 
//the product of two 2-digit numbers is 9009 = 91 × 99.
//Find the largest palindrome made from the product of two 3-digit numbers.


function paliProduct ($digit){
	$largest =  pow(10, $digit) - 1;
	$copy = $largest;
	$max = 0;

	for($i=$largest; $i>0; $i--){
		for($j=$copy; $j>0; $j--){
			$product = $i * $j;
			if (isPalidrome($product)){
				if($product > $max){
					$max = $product;
				}
			}
			// echo 'is Palidrome: ' . $i .' * ' . $j . "\t\n";
		}
	}	
	return $max;
}

function isPalidrome($number){
	$dev = 0;
	$cNumber = $number;
	while($number>0){
		$nValue = $number%10;
		$dev = $dev * 10 + $nValue;
		// echo $dev."\t\n";
		$number = (int)($number/10); //Normally, a floating point from a division. Casting to an int.
		
	}
	if($dev!=0 && $dev==$cNumber)
		return true;
	return false;
}

echo paliProduct(3)."\t\n";

