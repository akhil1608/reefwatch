<html>
<head>
<title>WHAT WE DO</title>
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
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgWhatWeDo.png');">
<div class="container-fluid">
	<?php 
		$about=$init=$help=$part=$mul=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$wwd = "active";
		include("navbar.php");
	?>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-2" style="margin-left: 75;">
			<h4>WHAT WE DO</h4>
			<h5 style="line-height: 1.6; color: #a0a0a0;">ReefWatch is committed towards changing India's interaction with her ocean. We hope to make people more aware - <a href="<?php echo base_url();?>current_initiatives">projects page</a> 
			to fund research - <a href="<?php echo base_url();?>past_initiatives">past activities</a> that illuminates more sustainable ways of using the ocean, and to work with communities and the Indian Government to realize our vision of protecting the ocean for our future generations.<br /> 
			We work closely with our <a href="<?php echo base_url();?>partners">partners</a> and <a href="<?php echo base_url();?>donate">donors</a> to achieve this vision. See <a href="<?php echo base_url();?>youcanhelp">how you can help...</a>
			</h5>
		</div>
		<div class="col-md-7" style="margin-left: -15;">
			<h4>WHY WE DO WHAT WE DO</h4>
			<h5 style="line-height: 1.2; color: #54B6D6;">For many millions of years, the ocean truly was a cradle of life, supporting millions of animals large and small in its fold. During the early parts of the Industrial Revolution, the ocean was a silent buffer – absorbing much of the carbon dioxide, pollutants and effluents human society was creating as by-products of progress. It has also, for years, supplied a growing demand for protein in most parts of the world. Unfortunately, large as she is, the ocean is not infinite, and nor are her resources or limits. Today we are very close to pushing those limits.
			</h5>
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 744px; height: 330px;">
				<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 744px; height: 330px;">
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>pic1.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>pic2.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>pic3.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>pic4.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>pic5.jpg"></div>
			        <div><img u="image" src="<?php echo base_url().IMG_URL;?>pic6.jpg"></div>
					<span u="arrowleft" class="al" style="top: 165px; left: 8px;"></span>
					<span u="arrowright" class="ar" style="top: 165px; right: 8px;"></span>
			    </div>
		    </div>
		    <h5 style="line-height: 1.2; color: #54B6D6;">We who dwell on this planet need clean air, food, medicines for illnesses, a hospitable climate, recreation, inspiration and access to a source of inspiration and richness that is greater than ourselves or our own everyday lives. For these reasons, a healthy ocean is vital for human health. <br />
			We owe it to ourselves to nurture these resources for our own survival and that of our children and theirs.
			</h5>
			<br />
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
</body>
</html>