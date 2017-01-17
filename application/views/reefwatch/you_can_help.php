<html>
<head>
<title>YOU CAN HELP</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
<style>
	a {
		color: #54B6D6;
	}
	a:hover {
		color: #1083A3;
		text-decoration: none;
	}
    .al,.ar {
	    display: block;
	    position: absolute;
	    background: url(public/images/arrow.png) no-repeat;
	    overflow: hidden;
	}
	.al {
		width: 27px;
	    height: 27px;
	}
	.ar {
		width: 57px;
	    height: 27px;
	    clip: rect(0px,57px,27px,30px);
	} 
</style>
<script src="<?php echo base_url().JS_URL?>jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url().JS_URL; ?>jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
    	var _SlideshowTransitions = [
        				{ $Duration: 2000, $Opacity: 2 }
        				];
        var options = { $DragOrientation: 0,
        				$PauseOnHover: 1,
        				$AutoPlay: true,
        				$SlideshowOptions: {
                			$Class: $JssorSlideshowRunner$,
                			$Transitions: _SlideshowTransitions,
                			$TransitionsOrder: 1,
                			$ShowLink: true
                		},
                		$ArrowNavigatorOptions: {
				            $Class: $JssorArrowNavigator$,
				            $ChanceToShow: 2
				        }
            		};
        var jssor_slider = new $JssorSlider$('slider1_container', options);
    });
</script>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgyoucanhelp.png');">
<div class="container-fluid">
	<?php 
		$about=$wwd=$init=$part=$mul=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$help = "active";
		include("navbar.php");
	?>
	<div class="row" style="margin-left: -40;">
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
			<h4 style="display: inline; color: #54B6D6;">EVERY LITTLE HELPS – </h4><h5 style="display:inline; color: #54B6D6;">SMALL CHANGES FOR BIG ONES</h5>
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 538px; height: 258px;">
				<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 538px; height: 258px;">
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s1.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s2.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s3.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s4.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s5.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s6.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s7.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>ych_s8.jpg"></div>
					<span u="arrowleft" class="al" style="top: 129px; left: 8px;"></span>
					<span u="arrowright" class="ar" style="top: 129px; right: 8px;"></span>
			    </div>
		    </div>
		</div>
		<div class="col-md-3">
			<h4 style="color: #54B6D6">VOLUNTEER with REEFWATCH</h4>
			<h6 style="line-height: 1.8;">Volunteering with ReefWatch is very fulfilling, fun and 
			rewarding. By giving your time and talents, you are making
			a huge difference to the way the ocean is protected in
			India.<br />
			We have a small group of passionate people in the core
			team, and our work is richer for the efforts put in by our
			volunteers. You do not have to be a marine scientist to help
			– we welcome people from the fields of law, media, design,
			film, finance and pretty much any ocean lover with time to 
			spare.<br />
			<a href="<?php echo base_url();?>ourteam">Our Team</a> to see profiles of our previous volunteers, 
			and <a href="<?php echo base_url();?>contactus">contact us</a> to discuss possibilities for you.</h5>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row" style="margin-left: -40;">
		<br />
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h3 style="display: inline;"><a href="<?php echo base_url();?>donate">DONATE</a></h3>&nbsp&nbsp<h4 style="display: inline;">TO</h4>&nbsp&nbsp<h3 style="display: inline;">REEFWATCH</h3>
			<h5 style="line-height: 1.2; color: #a0a0a0;">We strive towards an India where the oceans are a part of our consciousness, and the diversity of life within it are nurtured and protected.<br />
			Your time and money are essential to the success of our vision. If it is one that you share too, we ask you to please donate.<br />
			You may donate towards a specific project if you wish, or leave it to us to best allocate your donation towards the projects that require it most. <br />
			We encourage you to join our ReefWatch Membership program by becoming a regular supporter, contributing anything from Rs. 2500 per month 
			and thus making an important contribution to our work. We invite all our Members to attend our bi-annual meetings to bring new issues into focus.<br />
			All donors and members will receive newsletters every 2 months to keep you updated about the status of our projects and informed about the fruits 
			of your generosity. You will also receive an annual calendar, and a 10% discount on our merchandise.<br />
			We rely on the support of ocean lovers across India. With the financial and moral contribution from individuals and institutions around India and the world, ReefWatch has the financial capacity and public mandate to advocate for our precious oceans.<br />
			Proceed to <a href="<?php echo base_url();?>donate">payment options</a> or <a href="<?php echo base_url();?>contactus">contact us</a> if you have any queries.</h5>
			<br />
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
</body>
</html>