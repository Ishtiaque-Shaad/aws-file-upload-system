<?php
require 'vendor/autoload.php';
//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'your access key');
if (!defined('awsSecretKey')) define('awsSecretKey', 'your secret key');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
?>
