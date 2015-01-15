<?php

function larFactor($number){

  // By deffinition, "A number greater then 1 can be written as the product of any other
  // prime numbers". So, 2*2*3 = 12; {2,3} are prime numbers.
  // A prime number is a number that can be divided only by one or itself.
  // 
  // We're looking for the larges prime factor of a number. In our example, the answer is:3 
  // 
  // Our algorithm? 
  // 
  // When should it stop? : When the product of the numbers is greater or equal to the passed
  // number.
  // 
  // 2*2*2*2 = 16 {2} is the largest prime number.
  // 3*5 = 15, {5} is the largest prime number. 
  // 
  $count = 2; //Smallest primer number
  while($count*$count <= $number){
  	if($number%$count==0){
  		$number=$number/$count;
  	}else{
  		$count++;
  	}
  }
  return $number;

}

echo larFactor(600851475143);