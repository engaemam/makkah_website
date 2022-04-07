<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manask Umera | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>
	#firstPanel {background-image: url("/Makkah/files/Madina_BG.jpg");}
	#secondPanel {display: block;}
	#umeraSteps {
		display: block;
		list-style: decimal;
		font-family: "Cairo";
		line-height: 3em;
		margin: 1em 1em 1em 2em;
	}
	#secondPanel img {
		display: block;
		position: relative;
		width: 75vw;
		margin: auto 12.5vw;
	}
</style>
</head>
<body id="manaskUmeraPage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">
		@include('user.pages.navbar')
		<container id="homeCont" class="main_container">
		<div id="firstPanel" class="panel main_panel">
		</div>
		<div id="secondPanel" class="panel main_panel">
			<h1 class="welcome_msg">Manask Al Umera</h1>
		<br>
		
		<br>
		<img id="explaination" src="makkah/files/umerahSteps.jpg" alt="Manask">
		<div align="center" class="container">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/bWLKvCuYM6Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		</div>
			
		</container>
	@include('user.pages.footer')
	</div>
	<script src="/Makkah/script.js"></script>
	<script src="/Makkah/prayerTimesAPI.js"></script>
	<script src="/Makkah/hijriDate.js"></script>
	<script>
		//Adjustment of Styling
		//Welcoming Message
		$(".welcome_msg").css({left: (($(window).width() - $(".welcome_msg").outerWidth()) / 2.1)})
		//Spacing After Welcome Message
		$("#explaination").css({marginTop: $(".welcome_msg").outerHeight() * 1.8})
	</script>
</body>
</html>