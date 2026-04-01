<?php
	//delete image denni_menu.jpg from /img/denni_menu/
	$file_pointer = "/home/portstanley.cz/www/img/denni_nabidka/test_menu.pdf";
	
	if (!unlink($file_pointer)) {
		echo ("$file_pointer can not be deleted due to error");
	} else {
		echo ("$file_pointer has been deleted");
	}
?>
