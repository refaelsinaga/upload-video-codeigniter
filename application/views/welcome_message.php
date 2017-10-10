<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>assets/css/style.css">
</head>
<body>


<code>
<h2>REFAELSINAGA | RL</h2>
<h5>Tutorial bagaimana cara upload video pada CodeIgniter</h5>
</code>
<code>
<div id="container">
	<form action="<?php echo base_url();?>index.php/c_upload/do_upload" method="post" enctype="multipart/form-data">
	<h1>Welcome to CodeIgniter!</h1>
	<div id="body">
		<code><input type="text" name="keterangan"></code>
		<p>Upload gambar</p>
		<code><input type="file" name="video"></code>
		<p><input type="submit" name="" value="Simpan"></p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</form>
</div>
</code>
</body>
</html>