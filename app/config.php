<?php
require 'vendor/autoload.php';
//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJCYAGUPB673E3FIA');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
?>