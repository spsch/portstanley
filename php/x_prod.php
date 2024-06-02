<?php
	$dir = "/home/portstanley.cz/www/img/denni_nabidka";
	$filename = "denni_menu.jpg";
	echo "Dir is set to " . $dir . "\n";
	chdir($dir);
	echo "Real path " . realpath($dir) . "\n";
	opendir($dir);
	if (unlink($filename)) {
		echo "File " . $filename . "deleted successfully";
	} else {
		echo "There was error deleting file " . $filename;
	}
	
?>
