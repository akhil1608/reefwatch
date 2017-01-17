<html>
<head>
<title>OUR TEAM</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
<style>
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
	h5 {
		font-weight: bold;
	}
	p {
		font-size: 12;
		color: #54B6D6;
	}
	.cont {
		position: relative;
		width: 300px;
		height: 230px;
		overflow: hidden;
	}
	#desc1,#desc2,#desc3,#desc4,#desc5,#desc6,#desc7 {
		position: absolute;
		top: 0;
		left: 0;
		background-color: #ffffff;
		width: 0;
		height: 0;
		padding-left: 5; 
		opacity: 0;
		overflow: hidden
	}
	#pic1,#pic2,#pic3,#pic4,#pic5,#pic6,#pic7 {
		position: absolute;
		top: 0;
		left: 0;
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
                		$ArrowNavigatorOptions: {
				            $Class: $JssorArrowNavigator$,
				            $ChanceToShow: 2
				        }
            		};
        var jssor_slider1 = new $JssorSlider$('slider1_container1', options);
        var jssor_slider2 = new $JssorSlider$('slider1_container2', options);
    });
</script>
<script>
	function f(n) {
		var elem;
		if(n>0) {
			elem = document.getElementById("desc"+n);
			frame(0,0,0,2.3,3,0.01,300);
		}
		else {
			elem = document.getElementById("desc"+(-n));   
			frame(230,300,1,-2.3,-3,-0.01,0);
		}
		function frame(h,w,o,dh,dw,dop,mw) {
		    if (w == mw) {
		    	return true;
		    } 
		    else {
		      h=h+dh;
		      w=w+dw; 
		      o=o+dop;
		      elem.style.height = h + 'px'; 
		      elem.style.width = w + 'px'; 
		      elem.style.opacity = o;
		      setTimeout(frame,5,h,w,o,dh,dw,dop,mw);
		    }
		}
	}
</script>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>mainbg2.png');">
<div class="container-fluid">
	<?php 
		$wwd=$init=$help=$part=$mul=$contact=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$about = $team = "active";
		include("navbar.php");
	?>
	<div class="row" style="margin-left: -70;">
		<div class="col-md-2">
		</div>
		<div class="col-md-10">
			<div class="col-md-4">
				<h4 style="color: #54B6D6;">FOUNDERS</h4>
				<div id="slider1_container1" style="position: relative; top: 0px; left: 0px; width: 300px; height: 230px;">
					<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 300px; height: 230px;">
				        <div class="cont">
				        	<div onclick="f(1)" id="pic1"><img u="image" src="<?php echo base_url().IMG_URL;?>founderPrahlad.jpg"></div>
				        	<div onclick="f(-1)" id="desc1">
								<h5>Prahlad Kakar</h5>
								<p>Prahlad's identity as an ad-guru in India is well known, however few know of his love for the ocean. Inspired by his first dive in Mauritius, where he encountered an antique Koran underwater, he worked tirelessly to bring SCUBA Diving into India. One of his first vacations with his family to his new Dive Resort, he was struck by the sheer beauty of the sea and vibrancy of life within it. To spread awareness about this treasure and to work towards its protection, he established ReefWatch Marine Conservation.</p>
							</div>
				        </div>
				        <div class="cont">
				        	<div onclick="f(2)" id="pic2"><img u="image" src="<?php echo base_url().IMG_URL;?>founderMitali.jpg"></div>
				        	<div onclick="f(-2)" id="desc2">
								<h5>Mitali Dutt Kakar</h5>
								<p>Mitali is a passionate SCUBA Diver, film maker and ocean lover. Committed to preserving India's marine heritage, she along with her husband Prahlad Kakar, established ReefWatch Marine Conservation in 1993. Alongside her long career in the ad film industry, she has also produced many documentary films on marine conservation, worked with coral reef researchers and conducted workshops and events to raise awareness about marine issues. She also serves on the National Wildlife Board of India.</p>
							</div>
			        	</div>
						<span u="arrowleft" class="al" style="top: 115px; left: 8px;"></span>
						<span u="arrowright" class="ar" style="top: 115px; right: 8px;"></span>
				    </div>
			    </div>
			</div>
			<div class="col-md-4" style="margin-left: -60;">
				<h4 style="color: #54B6D6;">EXECUTIVE DIRECTOR</h4>
				<div class="cont">
					<div onclick="f(3)" id="pic3"><img src="<?php echo base_url().IMG_URL; ?>executivedirector.jpg" /></div>
					<div onclick="f(-3)" id="desc3"><h5>Nayantara Jain</h5>
						<p>Known fondly as Tara, ReefWatch's Executive Director has her feet on the sand and her heart in the sea. She lived on the islands of Lakshadweep and Andamans as a SCUBA Diving Instructor for a few years, inspired by the beauty of the ocean, but increasingly disturbed by its degradation by factors global and local. Eventually she left the islands to learn more about marine biodiversity and conservation at the Scripps Institution of Oceanography in San Diego and has returned informed, optimistic and passionate about protecting India's marine spaces.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="margin-left: -60;">
				<h4 style="color: #54B6D6;">VOLUNTEERS & STAFF</h4>
				<div id="slider1_container2" style="position: relative; top: 0px; left: 0px; width: 300px; height: 230px;">
					<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 300px; height: 230px;">
						<div><img u="image" src="<?php echo base_url().IMG_URL;?>volunteersinfo.jpg"></div>
				        <div class="cont">
				        	<div onclick="f(4)" id="pic4"><img u="image" src="<?php echo base_url().IMG_URL;?>VolunteerNeha.jpg"></div>
				        	<div onclick="f(-4)" id="desc4">
								<h5>Neha Vajandar</h5>
								<p>Mitali is a passionate SCUBA Diver, film maker and ocean lover. Committed to preserving India's marine heritage, she along with her husband Prahlad Kakar, established ReefWatch Marine Conservation in 1993. Alongside her long career in the ad film industry, she has also produced many documentary films on marine conservation, worked with coral reef researchers and conducted workshops and events to raise awareness about marine issues. She also serves on the National Wildlife Board of India.</p>
							</div>
			        	</div>
				        <div class="cont">
				        	<div onclick="f(5)" id="pic5"><img u="image" src="<?php echo base_url().IMG_URL;?>VolunteerAlysha.jpg"></div>
				        	<div onclick="f(-5)" id="desc5">
								<h5>Alysha Lobo</h5>
								<p>Alysha Pinto-Lobo is a student of Psychology at Sophia College in Mumbai. She got involved because she feels the protection of marine life is not given its due importance in society today and ReefWatch is committed to bringing about an effective and sustainable change. She is excited to be a part of the team that will initiate that change. Being a volunteer at Reefwatch, Alysha feels she can help make a difference because of the passion and devotion of the team that continues to inspire her every day.</p>
							</div>
			        	</div>
				        <span u="arrowleft" class="al" style="top: 115px; left: 8px;"></span>
						<span u="arrowright" class="ar" style="top: 115px; right: 8px;"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row" style="margin-left: -70;">
		<div class="col-md-2">
		</div>
		<div class="col-md-10">
			<br />
			<div class="col-md-4">
				<h4 style="color: #54B6D6;">BOARD OF DIRECTORS</h4>
				<div class="cont">
					<div onclick="f(6)" id="pic6"><img src="<?php echo base_url().IMG_URL; ?>boardofdirectors.jpg" /></div>
					<div onclick="f(-6)" id="desc6"><h5>Sumer Verma</h5>
						<p>Sumer is one of the most experienced Diving Instructors in India. He is also an acclaimed underwater photographer and videographer, as has worked on several ad campaigns, magazine editorials, feature and documentary films. Ever conscious about giving back to the marine world that has been so generous with him, he uses his images and his experiences to educate the world about the ocean. He has opened his image bank to ReefWatch, and most of the pictures on this website are taken by him.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="margin-left: -60;">
				<h4 style="color: #54B6D6;">ADVISORS</h4>
				<div class="cont">
					<div onclick="f(7)" id="pic7"><img src="<?php echo base_url().IMG_URL; ?>advisors.jpg" /></div>
					<div onclick="f(-7)" id="desc7"><h5>Dr. Greg Rouse</h5>
						<p>Dr. Greg Rouse is a professor at the Scripps Institution of Oceanography at UC San Diego and curator of the Benthic Invertebrate Collection at Scripps. He has been on numerous expeditions that span habitats from tropical coral reefs to polar and deep-sea habitats, including whale falls, hydrothermal vents and methane seeps. His research interests include echinoderms, particularly crinoids (featherstars and sea lilies), annelid worms and seadragons (Syngnathidae).</p>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="margin-left: -60;">
				<h4 style="color: #54B6D6;">ADMINISTRATIVE & RESEARCH</h4>
				<img src="<?php echo base_url().IMG_URL; ?>nopic.png">
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
<br /><br /><br />
</body>
</html>