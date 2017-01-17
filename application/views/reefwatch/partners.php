<html>
<head>
<title>PARTNERS</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
<style>
<style>
	a {
		color: #54B6D6;
	}
	a:hover {
		color: #a0a0a0;
		text-decoration: none;
	}
</style>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgPartners.png');">
<div class="container-fluid">
	<?php 
		$about=$wwd=$init=$help=$mul=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$part = "active";
		include("navbar.php");
	?>
	<div class="row">
		<div class="col-md-10">
			<div class="col-md-2">
			</div>
			<div class="col-md-10" style="font-size: 16;">
				<p style="color: #54B6D6;">We believe in working in synergy with various organizations to most effectively protect the ocean. Harnessing the individual strengths and expertise of our partners, we hope together to create a passionate, ocean loving community.</p>
				<p style="color: #a0a0a0;">If you believe that your organization could use our support or if your expertise might assist ours, please <a href="<?php echo base_url();?>contactus">contact us.</a></p>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<?php
		$count=0;
		foreach ($res as $key) {
			if(!($count%2))
				echo '<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6 text-center">
						<div class="col-md-6">
							<a href="'.$key["href"].'"><img src="'.base_url().IMG_URL.$key["path"].'" alt="'.$key["name"].'"></a>
						</div>';
			else
				echo '		<div class="col-md-6">
							<a href="'.$key["href"].'"><img src="'.base_url().IMG_URL.$key["path"].'" alt="'.$key["name"].'"></a>
						</div>
					</div>
					<div class="col-md-3">
					</div>
				</div>';
			$count++;
		}
		if($count%2)
			echo '		<div class="col-md-6">
						</div>
					</div>
					<div class="col-md-3">
					</div>
				</div>';
	?>
</div>
</body>
</html>