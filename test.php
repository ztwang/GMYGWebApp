<?php
	$f = fopen('txts/status.txt', 'r+');
	$pre_status = fgets($f);
	$cur_status = fgets($f);
	print("".$pre_status."".$cur_status);
	fclose($f);
?>