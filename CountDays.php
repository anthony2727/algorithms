<?php 
function countDays($dateInString){

	// if the format is valid
	if(preg_match("/^\d{2}\.\d{2}\.\d{4}$/",$dateInString)){
		$dateArr = explode('.',$dateInString);

		$validDate = strtotime($dateArr[2].$dateArr[0].$dateArr[1]);
		$firstDay =  strtotime($dateArr[2]."01"."01");
		$secs =$validDate-$firstDay;

		$days = $secs/(60*60*24);

		print $days;
		
	}
}

countDays("02.01.2015");