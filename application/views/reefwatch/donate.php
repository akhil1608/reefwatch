<html>
<head>
<title>DONATE</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
<style>
	#tab1,#tab2{
		display: none;
	}
</style>
<script>
	function disp(n){
		document.getElementById("tab"+n).style.display="block";
		document.getElementById("tab"+(n+1)%3).style.display="none";
		document.getElementById("tab"+(n+2)%3).style.display="none";
	}
</script>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgdonate.png');">
<div class="container-fluid">
	<?php 
		$about=$wwd=$init=$help=$part=$mul=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$help = $donate = "active";
		include("navbar.php");
	?>
	<div class="row text-center">
		<img src="<?php echo base_url().IMG_URL;?>donatetext.png" />
		<br /><br /><br /><br />
	</div>
	<div id="tab0">
		<div class="row text-center">
			<img src="<?php echo base_url().IMG_URL;?>onlinepayactive.png" /> &nbsp &nbsp &nbsp &nbsp &nbsp
			<a onclick="disp(1)"><img src="<?php echo base_url().IMG_URL;?>debitpay.png" /></a> &nbsp &nbsp &nbsp &nbsp &nbsp
			<a onclick="disp(2)"><img src="<?php echo base_url().IMG_URL;?>chqpay.png" /></a>
		</div>
		<div class="row text-center">
			<img src="<?php echo base_url().IMG_URL;?>opdesc.png" />
			<br /><br /><br />
		</div>
	</div>
	<div id="tab1">
		<div class="row text-center">
			<a onclick="disp(0)"><img src="<?php echo base_url().IMG_URL;?>onlinepay.png" /></a> &nbsp &nbsp &nbsp &nbsp &nbsp
			<img src="<?php echo base_url().IMG_URL;?>debitpayactive.png" /> &nbsp &nbsp &nbsp &nbsp &nbsp
			<a onclick="disp(2)"><img src="<?php echo base_url().IMG_URL;?>chqpay.png" /></a>
		</div>
		<div class="row text-center">
			<img src="<?php echo base_url().IMG_URL;?>dpdesc.png" />
			<br /><br /><br />
		</div>
	</div>
	<div id="tab2">
		<div class="row text-center">
			<a onclick="disp(0)"><img src="<?php echo base_url().IMG_URL;?>onlinepay.png" /></a> &nbsp &nbsp &nbsp &nbsp &nbsp
			<a onclick="disp(1)"><img src="<?php echo base_url().IMG_URL;?>debitpay.png" /></a> &nbsp &nbsp &nbsp &nbsp &nbsp
			<img src="<?php echo base_url().IMG_URL;?>chqpayactive.png" />
		</div>
		<div class="row text-center">
			<img src="<?php echo base_url().IMG_URL;?>cpdesc.png" />
			<br /><br /><br />
		</div>
	</div>
</div>
</body>
</html>