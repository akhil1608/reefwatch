<html>
<head>
<title>CURRENT INITIATIVES</title>
<link rel="icon" href="<?php echo base_url().IMG_URL?>favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>style.css">
<link rel="stylesheet" href="<?php echo base_url().CSS_URL?>custom_scrollbar.css">
<style>
	a {
		color: #54B6D6;
	}
	a:hover {
		color: #1083A3;
		text-decoration: none;
	}
	#scroll {
            height: 300px;
    }
</style>
<script src="<?php echo base_url().JS_URL?>jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url().JS_URL?>jquery.custom-scrollbar.js"></script>
<script>
    $(window).load(function () {
        $(".demo").customScrollbar();
        $("#scroll").customScrollbar({fixedThumbHeight: 13, fixedThumbWidth: 18});
    });
</script>
</head>
<body style="background-image: url('<?php echo base_url().IMG_URL;?>bgCurrentInitiatives.png');">
<div class="container-fluid">
	<?php 
		$about=$wwd=$help=$part=$mul=$contact=$team=$cur=$past=$donate=$blog=$gallery=$video=NULL;
		$init = $cur = "active";
		include("navbar.php");
	?>
	<div class="row">
		<div class="col-md-8">
			<div class="col-md-3">
			</div>
			<div class="col-md-9" style="margin-left: -30; margin-top: -10;">
				<div class="row" >
					<h4 style="color: #54B6D6;">On Going Projects</h4>
					<h6 style="line-height: 1.4;">Phase One of ReefWatch's activities under new leadership focuses on Education & Awareness. We aim to bring the ocean to people, and people to the ocean, in a thoughtful, educative and sustainable way. Through the projects outlined in this page, we hope to inform people about the beauty and the importance of the ocean and change their interaction with it. To support our projects, please <a href="<?php echo base_url()?>donate">donate</a> or <a href="<?php echo base_url()?>contactus">volunteer</a> with us.</h6>
				</div>
				<div class="row">
					<div class="col-md-4" style="margin-left: -15; margin-top: 20; padding-right: 50;">
						<h4 style="color: #a0a0a0; font-size: 16; font-weight: bold;">HAPPY HOLIDAYS FOR THE OCEAN & YOU</h4>
						<div id="scroll" class="custom-skin">
							<h6 style="color: #1083A3; line-height: 1.4;">The number of tourists that visit the Andaman & Nicobar Islands is growing rapidly, in 2008 alone, about 127500 tourists made their way here. For islands that are relatively sparsely populated and with inadequate infrastructure, such an influx can be devastating. However, tourism, if done right, can also be a positive force for nurturing the natural beauty of a place. ReefWatch aims to create awareness amongst tourists, educating them about the fragility of their destination and how to minimize negative impacts, through videos, brochures and easily available, relevant information packs. Please contact us if your company would like to sponsor this project.</h6>
						</div>
					</div>
					<div class="col-md-8" style="margin-left: -40; margin-top: 5;">
						<img src="<?php echo base_url().IMG_URL;?>cinit.jpg" />
						<div style="margin-left: 20; width: 475; "><h3 style="color: #54B6D6; font-size: 20; font-weight: bold;">SHORT VIDEO PROJECT</h3>
						<h6 style="line-height: 1.4;">Committed to spreading the message of care for our oceans to as wide an audience as possible, ReefWatch is creating a series of 2 minute videos about the ocean and its inhabitants for circulation on social networking and video sharing sites.<br />
						These films consist of stunning underwater footage collected off the shores of India and the world over a period of 10 years by photographer and ReefWatch board member <a href="<?php echo base_url()?>ourteam">Sumer Verma.</a><br /> 
						They talk of the ocean's beauty, importance and vulnerability to current practices. To fund this initiative, please <a href="<?php echo base_url()?>donate">click here.</a></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-8" style="margin-left: -20; margin-top: 20;">
				<h3 style="color: #54B6D6; font-size: 23;">SCHOOL PROGRAMS: ISLAND SCHOOLS</h3>
				<h6 style="line-height: 1.6; color: #808080; text-align: justify;">ReefWatch currently runs programs in SCUBA Diving & Island Ecology for school children from mainland centres such as Mumbai, Pune and Bangalore.<br />
				We currently raising funds to extend this program, free of cost to selected students from underprivileged backgrounds in the Andaman & Nicobar Islands. By giving these children an unprecedented opportunity to dive in the ocean around their islands and teach them about the importance of healthy ocean ecosystems for the wellbeing of themselves and their families, we hope to change their attitudes and relationship with the sea. ReefWatch will mentor these students, helping them find sustainable careers on the islands rather than purely extractive ones.<br /> 
				The aim is to create a brigand of local eco-warriors with an interest in protecting their island ecosystems, who will also act as ambassadors in their communities.</h6>
				<br /><br /><br />
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
</div>
</body>
</html>