<?php

	$city=$_GET['city'];
	$city=str_replace(" ",'',$city);
	$html = file_get_contents('http://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');
	preg_match("/1 &ndash; 3 Day Weather Forecast Summary:(.*?)<\/span><\/span><\/span></",$html,$m);
	echo $m[1];

?>
