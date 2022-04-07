<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fast Trains | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
#firstPanel {
	background-color: rgba(0, 0, 0, 0.0);
	background-image: url("/Makkah/files/train3.jpg");
	background-position: bottom;
	background-size: cover;
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
.welcome_msg{
opacity: 0.5;
}
.info_slide:hover {box-shadow: 0 0 10px 5px #AAA;}
.info_img {
	display: block;
	flex-direction: row;
	height: 100%;
}
.info_img img {
	width: 90%;
	height: 100%;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;

}
.info_cont {
	display: block;
	flex-direction: row;
	font-size: 1.5em;
	font-family: "Abel";
	text-align: left;
	text-transform: uppercase;
	padding: 0 1.5em;
	border-left: 1px solid #000;
	line-height: 1.45em;
}
</style>
</head>
<body id="embassiesPage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">
		@include('user.pages.navbar')
		<container id="homeCont" class="main_container">
			<h1 class="welcome_msg">Fast Trains in Saudi Arabia</h1>
		<div id="firstPanel" class="panel main_panel">
		</div>

			<div id="secondPanel" class="panel main_panel">
					<h1 class="welcome_msg">
						<button class="btn btn-primary">Button test</button>
						</h1>
				
					<img src="/Makkah/files/traininfo.jpg" alt="htrain" class="center">

						</div>
						<div id="thirdPanel" class="panel main_panel">
				
				
					<img src="/Makkah/files/traininfo3.jpg" alt="htrain" class="center">
					
						</div>

			
		</container>
	@include('user.pages.footer')
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="/Makkah/script.js"></script>
	<script src="/Makkah/prayerTimesAPI.js"></script>
	<script src="/Makkah/hijriDate.js"></script>
	<script>

		//Adjustment of Styling
		//Welcoming Message
		$(".welcome_msg").css( {left: (($(window).width() - $(".welcome_msg").outerWidth()) / 2.5)})

			//Second Panel Top Spacing
		$(".panel_side").css({marginTop: NavBarHeight, marginBottom: NavBarHeight})
		//Information Slides
		$("#infoSlides").css({marginTop: $(".welcome_msg").outerHeight() * 1.8})
		
	</script>
</body>
</html>