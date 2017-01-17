<html>
<head>
<title>ABOUT US</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
<style>
	a {
		color: #000000;
	}
	a:hover {
		color: #000000;
		text-decoration: none;
	}
	p {
		display: inline;
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
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgAboutUs.png');">
<div class="container-fluid">
	<?php 
		$wwd=$init=$help=$part=$mul=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$about = "active";
		include("navbar.php");
	?>
	<div class="row">
		<div class="col-md-8" style="margin-left: 37;">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-3">
					<h4>VISION</h4>
					<h5 style="line-height: 2; color: #54B6D6;">To protect the ocean<br />
					and the life within it,<br />
					through education,<br />
					research and<br />
					management, so that<br />
					our children and<br />
					theirs will continue to<br />
					have access to this<br />
					source of richness and<br />
					beauty that sustains<br />
					us today.</h5>
				</div>
				<div class="col-md-7" style="margin-left: -80; margin-top: -5;">
					<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 572px; height: 363px;">
	    				<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 572px; height: 363px;">
					        <div><img u="image" src="<?php echo base_url().IMG_URL;?>about_s1.jpg"></div>
					        <div><img u="image" src="<?php echo base_url().IMG_URL;?>about_s2.jpg"></div>
					        <div><img u="image" src="<?php echo base_url().IMG_URL;?>about_s3.jpg"></div>
					        <div><img u="image" src="<?php echo base_url().IMG_URL;?>about_s4.jpg"></div>
					        <div><img u="image" src="<?php echo base_url().IMG_URL;?>about_s5.jpg"></div>
					        <div><img u="image" src="<?php echo base_url().IMG_URL;?>about_s6.jpg"></div>
					        <div><img u="image" src="<?php echo base_url().IMG_URL;?>about_s7.jpg"></div>
							<span u="arrowleft" class="al" style="top: 181px; left: 8px;"></span>
							<span u="arrowright" class="ar" style="top: 181px; right: 8px;"></span>
					    </div>
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
					<h6 style="line-height: 1.8; color: #707070;"><br />ReefWatch Marine Conservation is a non-profit Organization established in 1993, as a Public Charitable Trust under the Societies Registration Act. Reefwatch is involved in research, education and outreach activities. These have included coral reef monitoring in the Lakshadweep and Andaman & Nicobar Islands, documentary films, beach clean ups in Mumbai, SCUBA training for scientists and education programs in schools across the country.<br />
					ReefWatch has served as a Member of the National Board for Wildlife (Government of India) since May 2007. ReefWatch has had the privilege of working with many dedicated and inspiring individuals in the fields of science, government, filmmaking, photography and the media.<br /> 
					Its efforts are targeted towards protecting and nurturing the diversity of life in India's coastal and marine environments.</h6>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin-left: -10;">
			<h4 style="color: #54B6D6;">OBJECTIVES</h4>
			<h5 style="line-height: 1.6;">ReefWatch's strategy for the<br />conservation of our marine spaces is<br />simple. We must first know our<br />ocean, and then use this knowledge<br />and ensuing enthusiasm to inform<br />sustainable management.Thus<br />under a refreshed team and<br />management, ReefWatch aims to<br />fulfill three objectives, education,<br />research and management, in a<br />phased order: </h5>
			<h6><p style="color: #54B6D6;">Phase One<br /></p>
			<p style="color: #a0a0a0;">focuses on education & awareness<br />building:<br /></p>
			<a href="#">Read More</a><br /><br />
			<p style="color: #54B6D6;">Phase Two<br /></p>
			<p style="color: #a0a0a0;">will incorporate scientific research into<br />the fold of ReefWatch activities: <br /></p>
			<a href="#">Read More</a><br /><br />
			<p style="color: #54B6D6;">Phase three<br /></p>
			<p style="color: #a0a0a0;">will involve a strengthening of<br />ReefWatch's advisory and support role<br />with governmental and regulatory<br />bodies by:<br /></p>
			<a href="#">Read More</a><br /></h6>
			<a href="<?php echo base_url();?>ourteam"><img src="<?php echo base_url().IMG_URL; ?>ourteam.jpg" style="margin-top: 10; margin-left: 20;"></a>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>
</body>
</html>