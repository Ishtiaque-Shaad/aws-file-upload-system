<?php
if(isset($_POST['Submit'])){
	//retreive post variables
	$fileName = $_FILES['theFile']['name'];
	$fileTempName = $_FILES['theFile']['tmp_name'];
	
	//create a new bucket
	$s3->putBucket("redqtestbucket", S3::ACL_PUBLIC_READ);
	
	$success = "<p><strong>We successfully uploaded your file.</strong></p>";
	$fail = "<p><strong>Something went wrong while uploading your file... sorry.</strong></p>";
	//move the file
	if ($s3->putObjectFile($fileTempName, "redqtestbucket", $fileName, S3::ACL_PUBLIC_READ)) {
		echo $success;
	}else{
		echo $fail;
	}
}