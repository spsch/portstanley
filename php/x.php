<?php
	$dir = "/home/portstanley.cz/www/img/denni_nabidka";
	$filename = "denni_menu_del.jpg";
	//echo "Dir is set to " . $dir . "\n";
	//chdir($dir);
	//echo "Real path " . realpath($dir) . "\n";
	//opendir($dir);
	//if (unlink($filename)) {
	//	echo "File " . $filename . "deleted successfully";
	//} else {
	//	echo "There was error deleting file " . $filename;
	//}
	try {
		chdir($dir);
		opendir($dir);
		unlink($filename);
	} catch(Throwable $e) {
		$trace = $e->getTrace();
 		echo $e->getMessage().' in '.$e->getFile().' on line '.$e->getLine().' called from '.$trace[0]['file'].' on line '.$trace[0]['line'];
	}
?>
