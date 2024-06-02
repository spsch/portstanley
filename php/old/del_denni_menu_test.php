<?php
	$kokot = "../img/denni_nabidka";
	echo "Directory is " . "\n" .  $kokot . "\n";
	$fileToDel = "pokus.jpg";
	echo "File to be deleted " . "\n" . $fileToDel . "\n";
	echo "Current dir" . "\n";
	echo getcwd() . "\n";
	echo "changing to nabidka dir" . "\n";
	chdir('../img/denni_nabidka');
	echo "Check that chdir was successfull" . "\n" ;
	echo getcwd() . "\n";
	echo "Opening directory " . $kokot . "\n";
	$dirhandle = opendir($kokot);
?>
