<?php
$file1 = 'cyxie.txt';
$file2 = 'Merari01.txt';
$file3 = 'Awkwardtheturtle.txt';
$file4 = 'Gallowboob.txt';
$file5 = 'siouxsie_siouxv2.txt';
$searchfor = $_GET['subsearch'];;

// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');

if (substr( $searchfor, 0, 2 ) !== "r/"){
	if (substr( $searchfor, 0, 2 ) !== "R/"){
		echo "You forgot the \"r/\" at the beginning. Let me fix that!\n";
		$searchfor = "r/" . $searchfor;
	}
}
$searchfor = strtolower($searchfor);
echo "Your query: ";
echo $searchfor;
echo "\n\n";

// get the file contents, assuming the file to be readable (and exist)
$contents1 = file_get_contents($file1);
$contents1 = strtolower($contents1);
if(strpos($contents1, $searchfor) !== false){
   echo "Welcome your new overlord: u/Cyxie\n";
}

else{
   echo "No matches for u/Cyxie found! You're good.\n";
}

// get the file contents, assuming the file to be readable (and exist)
$contents2 = file_get_contents($file2);
$contents2 = strtolower($contents2);
if(strpos($contents2, $searchfor) !== false){
   echo "Welcome your new overlord: u/Merari01\n";
}

else{
   echo "No matches for u/Merari01 found! You're good.\n";
}

// get the file contents, assuming the file to be readable (and exist)
$contents3 = file_get_contents($file3);
$contents3 = strtolower($contents3);
if(strpos($contents3, $searchfor) !== false){
   echo "Welcome your new overlord: u/Awkwardtheturtle\n";
}

else{
   echo "No matches for u/Awkwardtheturtle found! You're good.\n";
}

// get the file contents, assuming the file to be readable (and exist)
$contents4 = file_get_contents($file4);
$contents4 = strtolower($contents4);
if(strpos($contents4, $searchfor) !== false){
   echo "Welcome your new overlord: u/Gallowboob\n";
}

else{
   echo "No matches for u/Gallowboob found! You're good.\n";
}

// get the file contents, assuming the file to be readable (and exist)
$contents5 = file_get_contents($file5);
$contents5 = strtolower($contents5);
if(strpos($contents5, $searchfor) !== false){
   echo "Welcome your new overlord: u/siouxsie_siouxv2\n";
}

else{
   echo "No matchesfor u/siouxsie_siouxv2 found! You're good.\n";
}