<html>
<head>
<title>GET IN TOUCH</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
<style>
	.contactinput input,textarea {
		color: #999;
	    border: 1px solid #1bb6c5;
	    font-family: 'PT Sans', sans-serif;
	    font-size: 13;
	    line-height: 1;
	    padding: 0 25;
	    margin: 0 0 8 0;
	    border-radius: 10px;
	}
	.contactinput input {
		width: 300;
	    height: 30;
	}
	.contactinput textarea {
		width: 300;
	    height: 175;
	}
	.contactinput input[type=submit]{
		height: 33;
		width: 100;
		background-image: url('<?php echo base_url().IMG_URL?>inputcontact.png');
		border: none;
	}
</style>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgContactUsNew.png');">
<div class="container-fluid">
	<?php 
		$about=$wwd=$init=$help=$part=$mul=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$contact = "active";
		include("navbar.php");
	?>
	<div class="row"> 
		<br />
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
			<div class="row" style="margin-left: -25;">
				<img src="<?php echo base_url().IMG_URL; ?>contacttext1.png" />
				<br /><br />
				<img src="<?php echo base_url().IMG_URL; ?>contacttext2.png" />
			</div>
			<div class="row" style="margin-left: 5;">
				<br /><br /><br /><br />
				<div class="col-md-4">
					<h5 style="line-height: 1.4; color: #a0a0a0;">ReefWatch Marine Conservation Office mobile</h5>
					<h4 style="line-height: 1.4; color: #54B6D6;">+91 9867437640</h4>
				</div>
				<div class="col-md-8">
					<h4 style="line-height: 1.4; color: #54B6D6;">ReefWatch Marine Conservation<br /> 
					14 C Bungalow, Boran Road<br /> 
					Opp. Elco Market,<br /> 
					Off Hill Road<br /> 
					Bandra (W), Mumbai<br /> 
					India 400050<br />
					</h4>
					<br />
					<div style="margin-left: 30;">
						<h4 style="color: #a0a0a0;">Executive Director</h4> 
						<h4><a href="<?php echo base_url(); ?>home">nayantara@reefwatchindia.org</a></h4>
					</div>
				</div>
			</div>
			<br /><br /><br /><br /><br />
		</div>
		<div class="col-md-3">
			<form method="post" action="contactus">
				<div class="contactinput" style="margin-top: 25; margin-left: 20;">
					Name: <br /> <input type="text" name="name" required /> <br />
					Email: <br /> <input type="email" name="email" required /> <br />
					Subject: <br /> <input type="text" name="sub" required /> <br />
					Your Message: <br /> <textarea name="mess" required > </textarea> <br />
					<input type="submit" value=""/>
				</div>
			</form>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
</body>
</html>