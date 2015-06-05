<?php
//By Anthony Rodriguez
//Implement Greedy Algorithm (Tree decision Algorithm) to get the minimum amount of conins 
//necesary to change an amount

//Data representing the coins.
$coins = array(1,5,10,25);
// sort coins from max to min
rsort($coins);
// Amount to change
$change = 16;

$len = count($coins);
$amountOfCoinsUsed = 0;

for($i=0; $i<$len; $i++){
	$currentCoin = $coins[$i];
	if ($currentCoin <= $change){
		$amountOfCoinsUsed += (Int)($change / $currentCoin);
		$change = (Int)($change % $currentCoin);
	}
}

print("Amount of coins used: $amountOfCoinsUsed");