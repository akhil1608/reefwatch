<html>
<head>
<script>
	function hide() {
		document.getElementById("image").style.display="none";
		document.getElementById("back").style.display="none";
	}
</script>
<style>
	#image {
		position: fixed;
		top: 50%;
	  	left: 50%;
	  	transform: translate(-50%, -50%);
	}
	#back {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.5);
	}
</style>
</head>
<body>
	<div id="back">
		<a onclick="hide()"><img id="image" src="<?php echo base_url().IMG_URL;?>thankyoumessage.png" /></a>
	</div>
</body>
</html>