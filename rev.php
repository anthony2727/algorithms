<?php 

// Return a reversed sentence.
// This was completed using a recursive solution

function rev ($ss){

	if(!$ss)
		return ;
	$sa = explode(' ', $ss);
	$nsa = implode(' ',array_slice($sa,1));

	return " ".rev($nsa).' '.$sa[0];
}

print rev("Beautiful is life");