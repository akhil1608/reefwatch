<html>
<head>
<title>PAST INITIATIVES</title>
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
	.desc {
		position: relative;
		width:474;
		height:268;
		text-align: justify;
	    font-family: 'PT Sans', sans-serif;
	    font-size: 13px;
		color: white;
	}
	#d {
		position: absolute;
		background-color: #11B3C2;
		width: 350;
		height: auto;
		bottom: 0;
		right: 0;
		padding: 10;
		opacity: 0;
		transition: opacity 1s ;
	}
	.desc:hover #d {
		opacity: 1;
	}
	#d a {
		color: #a1e2e8;
    	text-decoration: none;
	}
	#d a:hover {
		color: white;
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
        				$AutoPlay: true,
        				$SlideshowOptions: {
                			$Class: $JssorSlideshowRunner$,
                			$Transitions: _SlideshowTransitions,
                			$TransitionsOrder: 1,
                			$ShowLink: true
                		}
            		};
        var jssor_slider = new $JssorSlider$('slider1_container', options);
    });
</script>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgpastinitiatives.png');">
<div class="container-fluid">
	<?php 
		$about=$wwd=$help=$part=$mul=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$init = $past = "active";
		include("navbar.php");
	?>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-6" style="margin-left: -30; margin-top: -10;">
			<div class="row">
				<div class="col-md-3">
					<h5 style="line-height: 1.7; color: #54B6D6;">Reefwatch Has Been Involved In Many Projects Over The Years, From Education Programs, Capacity Building Programs For Islanders, Coral Reef Monitoring Projects To Documentary Production And Government Advocacy.</h5>
				</div>
				<div class="col-md-9" style="margin-left: -20;">
					<h6>Highlighted here are snapshots of three projects ReefWatch has been a part of.</h6>
					<h4 style="color: #54B6D6;">TROUBLED WATERS</h4>
					<div class="desc">
						<img src="<?php echo base_url().IMG_URL;?>fishvideo.jpg" />
						<div id="d">This documentary tells the story of the troubled reefs of Lakshadweep, and won the prestigious Vatavaran Film Festival award in 2003. It was shot by ReefWatch Board member <a href="<?php echo base_url()?>ourteam">Sumer Verma</a> and produced by ReefWatch</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-left: 5; margin-top: 10;">
				<h4 style="color: #54B6D6;">WHALE SHARK PROJECT</h4>
				<img src="<?php echo base_url().IMG_URL;?>underconstructionpastini.png" />
			</div>
		</div>
		<div class="col-md-4" style="margin-left: -50; margin-top: -10;">
			<div class="col-md-9">
				<h4 style="color: #54B6D6;">SCHOOL PROGRAMS</h4>
				<h6 style="line-height: 1.6; color: #a0a0a0;">Education, we believe, is one of the key components of changing people's interaction with the ocean and creating an ethic of care and conservation that is essential for marine protection. Rather than restricting education to the classroom though, we think lasting lessons are learnt when the students's own interest is piqued, their ideas challenged and they experience something entirely new.<br /> 
				ReefWatch has conducted programs for many schools in mainland India, to introduce the youth to some of the most beautiful parts of our ocean – the Lakshadweep and Andaman Islands. We conduct snorkeling or SCUBA Diving sessions along with ecosystem studies of coral reefs, mangrove forests and rocky intertidal areas.<br /> 
				This is one of our most important projects, and remains ongoing.<br /> 
				Please <a href="#">click here</a> to download our School Program Concept & Itinerary if you are interested in taking part.</h6>
				<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 298px; height: 114px;">
					<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 298px; height: 114px;">
				        <div><img u="image" src="<?php echo base_url().IMG_URL;?>p1.jpg"></div>
				        <div><img u="image" src="<?php echo base_url().IMG_URL;?>p2.jpg"></div>
				        <div><img u="image" src="<?php echo base_url().IMG_URL;?>p3.jpg"></div>
				        <div><img u="image" src="<?php echo base_url().IMG_URL;?>p4.jpg"></div>
				    </div>
			    </div>
				<h6><a href="#">Click here</a> for a full downloadable list of ReefWatch's activities.</h6>
				<br />
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</div>
</body>
</html>