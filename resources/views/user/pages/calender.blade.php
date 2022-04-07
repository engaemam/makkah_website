<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calendar | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>
	#firstPanel {background: linear-gradient(to right, #348F50 50%, #56B4D3 50%);}
	#calBody {
		display: flex;
		width: 100%;
	}
	.date_panel {
		flex-direction: row;
		text-align: center;
		width: 50%;
	}
	.date_panel:first-of-type {
		border-right: 1px solid #FFF;
	}
	.date_panel h2 {
		color: #EEE;
		font-size: 2.25em;
		font-family: "Rajdhani";
		text-align: center;
		text-transform: capitalize;
		letter-spacing: 0.5px;
	}
	.date_panel h3 {
		color: #FFF;
		font-size: 1.1em;
		text-transform: capitalize;
	}
	.date_panel h4 {
		font-size: 1.25em;
		font-family: "Courgette";
		text-transform: capitalize;
		color: #000;
	}
	.date_panel h5 {
		color: #FFF;
		font-size: 0.9em;
		font-family: "Calibri Light", "Cairo";
		text-transform: uppercase;
	}
</style>
</head>
<body id="calendarPage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">
	    @include('user.pages.navbar')
		<container id="homeCont" class="main_container">
		<div id="firstPanel" class="panel main_panel">
			<div id="calBody">
				<div id="hejjDate" class="date_panel">
					<h2>hejj date</h2>
					<div>
						<h3>hajj starts on</h3>
						<h4>Sunday the 7<sup>th</sup> of Dhu al-Hijjah (19<sup>th</sup> of August)</h4>
						<h3>and ends on</h3>
						<h4>Friday the 12<sup>th</sup> of Dhu al-Hijjah (24<sup>th</sup> of August)</h4>
					</div>
				</div>
				<div id="umeraDate" class="date_panel">
					<h2>umera date</h2>
					<div>
						<h3>umera season starts on</h3>
						<h4>Wednesday the 1<sup>st</sup> of Safar (10<sup>th</sup> of october)</h4>
						<h3>and ends on</h3>
						<h4>Wednesday the 15<sup>th</sup> of Shawwal (19<sup>th</sup> of june)</h4>
					</div>
					<h5>note that umera has no fixed dates.</h5>
				</div>
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
		$("#calBody").css({paddingTop: ($(window).height() - $("#calBody").height()) / 2})
	</script>
</body>
</html>