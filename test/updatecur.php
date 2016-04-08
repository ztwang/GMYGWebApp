<?php
	$file0 = "../txts/curstatus.txt"; 
	$fh0 = fopen($file0, 'a+'); 
   	$txt0=$_POST['curs']; 
   	
   	file_put_contents('../txts/curstatus.txt',$txt0); // log to data.txt 
   	exit();
	
    fwrite($fh0,$file0); // Write information to the file
     // Close the file
    fclose($fh0);
?>
