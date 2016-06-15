<?php
require 'app/config.php';
require 'app/connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AWS</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
<body>
	<div id="main-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-8 holder">
					<div class="upload">
						<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
						  <fieldset class="form-group">
						    <h1>Upload a file</h1>
						    <input type="file" class="form-control-file" id="exampleInputFile" name="theFile">
						    <small class="text-muted">Please select a file by clicking the 'Browse' button and press 'Upload' to start uploading your file.</small>
						  </fieldset>
						  <input name="Submit" type="submit" class="btn btn-primary" value="Upload" />
						  <button class="btn btn-warning refresh" onclick="refresh()">Reload page</button>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="list"> 
						<h1>All uploaded files</h1>
						<?php require 'app/upload.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>


