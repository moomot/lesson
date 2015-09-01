<?php
    header('Content-type: text/html; charset=UTF-8');
	include('geo.php');
    $geo = new Geo(); // запускаем класс
    $data = $geo->get_value(); 
    $city = $geo->get_value('city', true);
	
	function isTolliatti() {
		return $city == "Тольятти";
	}
	echo $city;
	if(isTolliatti()) echo "Tolliatti";
?>