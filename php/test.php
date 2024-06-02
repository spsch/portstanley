<?php
	//delete image denni_menu.jpg from /img/denni_menu/
	$file_pointer = "../img/denni_nabidka/denni_menu.jpg";
	
	if (!unlink($file_pointer)) {
		echo ("$file_pointer can not be deleted due to error");
	} else {
		echo ("$file_pointer has been deleted");
	}
?>
