<?php
	$kokot = "../img/denni_nabidka";
	echo "Directory is " . $kokot;
	$fileToDel = "pokus.jpg";
	echo "File to be deleted " . $fileToDel;
	echo "Current dir";
	echo getcwd();
	chdir('../img/denni_nabidka');
	echo "nabidka dir" . "\n" ;
	echo getcwd();
	$dirhandle = opendir($kokot);
?>
