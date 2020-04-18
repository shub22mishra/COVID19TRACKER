<?php

$jsondata=file_get_contents("https://api.covid19india.org/state_district_wise.json");

$data=json_decode($jsondata,true);

foreach($data as $key => $value){
	$days_count =count($value)-1;
	$days_count_prev=$days_count-1;
}
// $total_confirmed= 0;
// $total_recovered= 0;
// $total_deaths= 0;

// foreach($data as $key => $value)
// {
// 	$total_confirmed=$total_confirmed + $value[$days_count]['totalconfirmed'];
// 	$total_recovered=$total_recovered + $value[$days_count]['totalrecovered'];
// 	$total_deaths=$total_deaths + $value[$days_count]['totaldeceased'];
// }


?>