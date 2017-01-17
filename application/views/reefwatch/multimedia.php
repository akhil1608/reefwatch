<html>
<head>
<title>MULTIMEDIA</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgundercons.png');">
<div class="container-fluid">
	<?php 
		$about=$wwd=$init=$help=$part=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$mul = "active";
		include("navbar.php");
	?>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10 text-center">
			<img src="<?php echo base_url().IMG_URL;?>underconsfullpage.png" />
		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>
</body>
</html>