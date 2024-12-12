<?php

$iAudit = $_GET["id"];
$sType  = $_GET["type"];
$sDate  = $_GET["date"];

if(isset($GLOBALS["HTTP_RAW_POST_DATA"])){
	
	$imageData = $GLOBALS["HTTP_RAW_POST_DATA"];
	$filteredData = substr($imageData, strpos($imageData, ",")+1);
	$unencodedData = base64_decode($filteredData);
	$fp= fopen($iAudit."_".$sType.".jpg", 'wb');
	
	if(fwrite($fp, $unencodedData)){
		
		fclose($fp);
		echo "ok";
	}
}
?>