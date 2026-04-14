<?php
	$dir = "/home/portstanley.cz/www/img/denni_nabidka";
	$filename = "denni_menu.pdf";
	echo "Dir is set to " . $dir . "\n";
	chdir($dir);
	opendir($dir);
echo "Real path " . realpath($dir) . "\n";
	if (unlink($filename)) {
		echo "File " . $filename . "deleted successfully";
	} else {
		echo "There was error deleting file " . $filename;
	}
	
?>
