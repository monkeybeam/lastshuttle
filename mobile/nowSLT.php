<?php

//Define System Starting Date
$SYSTEMSTARTDATE = mktime(0,0,0,10,31,2009) + 0;  

//Calculate SLT time now
$today = time();
$todaySLT = time() - 10800;  //substract 3 hours  PROBLEMATIC...SLT calculation not exact...where is time() data coming from.  
$todaySLTpretty = date('d-M-Y H:i:s', ($todaySLT));
$todaySLTminus1 = $todaySLT - 3600;  //backup start time by 1 hour so that continue missions will expire after only one hour duration

$now = date('Y-m-d H:i:s', $today); 
$nowSLT = date('Y-m-d H:i:s', $todaySLT);	
$nowSLTminus1 = date('Y-m-d H:i:s', $todaySLTminus1);	

//Check if we are now in daylight savings time
$daylightsavings = "0";  //zero means time IS in daylight savings
$daylightsavings = date('I', $todaySLT);  
	   //a value of 0 means we are NOT in daylight savings time (i.e., standard time)...usualy this is from November to March
       //a value of 1 means we are in daylight savings time...usually this is from March to November
   
?>