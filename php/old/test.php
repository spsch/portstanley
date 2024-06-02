<?php
        $data="PA.jpg";    
        $dir = "/data/0/0/009c7ee4-2ff7-4533-a932-4aca5afe8b4c/portstanley.cz/www/img/denni_nabidka";    
        $dirHandle = opendir($dir);    
        while ($file = readdir($dirHandle)) {    
            if($file==$data) {
                unlink($dir."/".$file);//give correct path,
				echo 'File deleted successfully' . $data;
            }
        }    
        closedir($dirHandle);

?>