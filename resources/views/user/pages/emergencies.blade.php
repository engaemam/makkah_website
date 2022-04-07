<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Emergencies | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>
#firstPanel {background-image: none;}
.slide {
	display: none;
	width: 0;
	visibility: hidden;
	opacity: 0;
	transition: all 500ms;
	}
.slide img {width: 100%; height: 100vh;}
/*Slideshow container */
.slideshow {
  	min-width: 100%;
  	position: relative;
  	margin: 0;
}
/*Fading Animation*/
.active.slide {
	display: block;
	width: 100%;
	visibility: visible;
	opacity: 1;
	transition: all 500ms;
}
	
/*Information Slides*/
#infoSlides {
	display: block;
	width: 100%;
}
.info_slide {
	display: flex;
	width: 95%;
	height: 130px;
	background-color: #EEE;
	margin: 2% 2% 4% 2%;
	padding: 2% 0.5%;
	text-align: center;
	border-radius: 2em;
	transition: all 250ms;
}
.info_slide:hover {box-shadow: 0 0 10px 5px #AAA;}
.info_img {
	display: block;
	flex-direction: row;
	height: 100%;
}
.info_img img {
	width: 100%;
	height: 100%;
}
.info_cont {
	display: block;
	flex-direction: row;
	font-size: 1.5em;
	font-family: "Abel";
	text-align: left;
	text-transform: capitalize;
	padding: 1.5em;
	border-left: 1px solid #000;
}
</style>
</head>
<body id="emergenciesPage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">
		@include('user.pages.navbar')
		<container id="homeCont" class="main_container">
		<div id="firstPanel" class="panel main_panel">
			<div class="slideshow">
				
				<div class="slide">
					<img src="/Makkah/files/fireman.jpg" class="slideshow_img" alt="Picture">
				</div>
				<div class="slide">
  					<img src="/Makkah/files/saudiAmbulance.jpg" class="slideshow_img" alt="Picture">
				</div>
				<div class="slide">
  					<img src="/Makkah/files/saudiPolice.jpg" class="slideshow_img" alt="Picture">
				</div>

			</div>
		</div>
			<div id="secondPanel" class="panel main_panel">
				<h1 class="welcome_msg">Emergencies Numbers in Mecca</h1>
				<div id="infoSlides">
				@foreach($policies as $police)
				<div class="info_slide">
					<div class="info_img cl-2 cl-t-2">
						<img src="/Makkah/files/policeLogo.svg" alt="Picture">
					</div>
					<div class="info_cont cl-10 cl-t-10">
						Name: {{$police['name']}}
						<br>
						Address: {{$police['formatted_address']}}
						<br>
						Phone:{{isset($police['international_phone_number']) ?$police['international_phone_number']  : "No NN"}}, {{isset($police['formatted_phone_number']) ?$police['formatted_phone_number']  : ""}}
					</div>
				</div>
				@endforeach

				@foreach($ambulances as $ambulance)
				<div class="info_slide">
					<div class="info_img cl-2 cl-t-2">
						<img src="/Makkah/files/ambulanceLogo.svg" alt="Picture">
					</div>
					<div class="info_cont cl-10 cl-t-10">
						Name: {{$ambulance['name']}}
						<br>
						Address: {{$ambulance['formatted_address']}}
						<br>
						Phone:{{isset($ambulance['international_phone_number']) ?$ambulance['international_phone_number']  : "No N N"}}, {{isset($ambulance['formatted_phone_number']) ?$ambulance['formatted_phone_number']  : ""}}
					</div>
				</div>
				@endforeach

				@foreach($fire_stations as $fire_station)
				<div class="info_slide">
					<div class="info_img cl-2 cl-t-2">
						<img src="/Makkah/files/civilDefence.png" alt="Picture" style="width: 80%">
					</div>
					<div class="info_cont cl-10 cl-t-10">
						Name: {{$fire_station['name']}}
						<br>
						Address: {{$fire_station['formatted_address']}}
						<br>
						Phone:{{isset($fire_station['international_phone_number']) ?$fire_station['international_phone_number']  : "No NN"}}, {{isset($fire_station['formatted_phone_number']) ?$fire_station['formatted_phone_number']  : ""}}
					</div>
				</div>
				@endforeach
				
				
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
		//Second Panel Top Spacing
		$(".panel_side").css({marginTop: NavBarHeight, marginBottom: NavBarHeight})
		//Information Slides
		$("#infoSlides").css({marginTop: $(".welcome_msg").outerHeight() * 1.8})
		//Slideshow
		var slideIndex = 0;
		showSlides();
		function showSlides() {
    	var i;
    	var slides = document.getElementsByClassName("slide");
    	for (i = 0; i < slides.length; i++) {slides[i].classList.remove("active");}
    	slideIndex++;
    	if (slideIndex > slides.length) {slideIndex = 1} 
    	slides[slideIndex-1].classList.add("active");
    	setTimeout(showSlides, 3000);
}</script>
</body>
</html>