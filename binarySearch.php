<?php
$a = array(0,2,4,5,8,9,11,25,60);
$n=4;

function find($n,$a){
	$d=0;
	$u=count($a);
	
	while($d<$u){
		
		$m = (int)(($d+$u)/2);
		print $m;
		
		if($n==$a[$m])
		{
			return "true";
		}
		else if($n>$a[$m]){
			$d=$m+1;
		}
		else if($n<$a[$m]){
			$u=$m-1;
		}
		
		
	}
	return "false";


}
print find(1,$a);