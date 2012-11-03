<?php
	$handler = opendir("message");

	while( ($filename = readdir($handler)) !== false ) 
	{
		if($filename[0]!='.')
		{
      			echo $filename."    ";
			echo file_get_contents("message/".$filename);
			echo "<br>";
		}
	}
?>
