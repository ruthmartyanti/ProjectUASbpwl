<?php
//Array with names
$a[] = "Jacket Art Kuning";
$a[] = "Jacket Art Biru dongker";
$a[] = "Jacket Art Biru Muda";
$a[] = "Kaos H & L";
$a[] = "Kaos Man City ";
$a[] = "Kaos Begin";
$a[] = "Celana Jogger";
$a[] = "Celana LoverGove";
$a[] = "Celana Chino Jeans";

//get the q parameter from URL
$q = $_REQUEST	["q"];

$hint = "";

//lookup all hints from array if $q is different from ""
if ($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0, $len))){
			if ($hint === ""){
				$hint = $name;
				}else{
				$hint .=", $name";
				}
			}
		}
	}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>