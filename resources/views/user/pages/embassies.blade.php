<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Embassies | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>

#firstPanel {
	background-color: rgba(0, 0, 0, 0.0);
	background-image: url("/Makkah/files/flags.jpg");
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
		<div id="firstPanel" class="panel main_panel">
		</div>
			<div id="secondPanel" class="panel main_panel">
				<h1 class="welcome_msg">Embassies in Saudi Arabia</h1>
				<div id="infoSlides">
				@foreach($embassies as $embassy)
				<div class="info_slide">
					<div class="info_img cl-2 cl-t-2">
						<img src="/img/{{$embassy->img}}" alt="Picture">
					</div>
					<div class="info_cont cl-10 cl-t-10">
						<b>Name: {{$embassy->name}}</b>
						<br><br>
						Address: {{$embassy->address}}
						<br><br>
						Phone: {{$embassy->phone}}
						
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
	</script>
</body>
</html>