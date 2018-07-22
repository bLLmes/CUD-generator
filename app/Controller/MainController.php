<?php

class MainController{
	
	function readCSV($filename, $path){
		$file=fopen($path,"r");

		$cud_info = array();
	    do{
	    	$cud_info[] = $headers;
	    }while($headers=fgetcsv($file));
	    $cud_info 			= array_filter($cud_info);

	    // Not done yet...
	}
}
?>