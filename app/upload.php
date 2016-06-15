<?php
	
	$bucket = "redqtestbucket";
	// Get the contents of our bucket
	$contents = $s3->getBucket($bucket);
	foreach ($contents as $file){
	
		$fname = $file['name'];
		$furl = "http://". $bucket .".s3.amazonaws.com/".$fname;
		
		//output a link to the file
		echo "<a href=\"$furl\">$fname</a><br />";
	}
?>