<?php

include 'Connection/db.php';
include 'Controller/MainController.php';

function submitCSV(){

	$filename = explode(".", $_FILES['filename']['name'])[0];

	if($filename != "" || $filename != null){
		$path = $_FILES['filename']['tmp_name'];
		
		return MainController::readCSV($filename, $path);
	}
}

?>