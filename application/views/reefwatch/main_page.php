<html>
<head>
<title>REEFWATCH MARINE CONSERVATION</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet"href="<?php echo base_url().CSS_URL?>style.css">
<script src="<?php echo base_url().JS_URL?>jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url().JS_URL; ?>jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
    	var _SlideshowTransitions = [
        				{ $Duration: 2000, $Opacity: 2 }
        				];
        var options = { $PauseOnHover: 1,
        				$AutoPlay: true,
        				$SlideshowOptions: {
                			$Class: $JssorSlideshowRunner$,
                			$Transitions: _SlideshowTransitions,
                			$TransitionsOrder: 1,
                			$ShowLink: true
                			}
            		};
        var jssor_slider1 = new $JssorSlider$('slider1_container1', options);
        var jssor_slider2 = new $JssorSlider$('slider1_container2', options);
    });
</script>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgHomeFinal.png');">
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-12">
				<img alt="Home Logo" src="<?php echo base_url().IMG_URL;?>homelogo.png" />
				<br /><br /><br /><br /><br />
			</div>
		</div>
		<div class="row" style="margin: 0px;">
			<div class="col-md-3">
				<a href="<?php echo base_url();?>aboutus">
					<img src="<?php echo base_url().IMG_URL.$part1[0]["path"];?>" height="340" width="326" />
				</a>
				<div class="link"><a href="<?php echo base_url();?>aboutus">About Us</a></div>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url();?>whatwedo">
					<div id="slider1_container1" style="position: relative; top: 0px; left: 0px; width: 326px; height: 340px;">
	    				<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 326px; height: 340px;">
	    					<?php foreach ($part2 as $key) {?>
							<div><img u="image" src="<?php echo base_url().IMG_URL.$key["path"];?>" /></div>
							<?php }?>
					    </div>
				    </div>
			    </a>
				<div class="link"><a href="<?php echo base_url();?>whatwedo">What We Do</a></div>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url();?>initiatives">
					<img src="<?php echo base_url().IMG_URL.$part3[0]["path"];?>" height="340" width="326" />
				</a>
				<div class="link"><a  href="<?php echo base_url();?>initiatives">Initiatives</a></div>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url();?>youcanhelp">
					<div id="slider1_container2" style="position: relative; top: 0px; left: 0px; width: 326px; height: 340px;">
						<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 326px; height: 340px;">
							<?php foreach ($part4 as $key) {?>
							<div><img u="image" src="<?php echo base_url().IMG_URL.$key["path"];?>" /></div>
							<?php }?>
						</div>
				    </div>
			    </a>
				<div class="link"><a href="<?php echo base_url();?>youcanhelp">You Can Help</a></div>
			</div>
		</div>
	</div>
</body>
</html>
