<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://360player.io/static/dist/scripts/embed.js" async></script>
<link rel="icon" href="/Makkah/files/logo.png">
	<style>
	/*Homepage*/

/*First Panel*/
#firstPanel {
	min-height: 100vh;
	background-position: 100% 100%;
	background-attachment: fixed;
	background-size: cover;
}
#kaaba360 {
	width: 100%;
	height: 100vh;
}
.welcome_msg {
	position: absolute;
	color: #FFF;
	font-size: 4em;
	font-family: "Poiret One", "cursive";
	font-weight: 100;
	padding: 0.1em 2em;
	border-radius: 1em;
	background-color: rgba(0, 0, 0, 0.9);
	cursor: default;
	transition: all 500ms;
}
.welcome_msg::selection {background-color: transparent;}

/*Second Panel*/
#secondPanel {display: flex;}
.panel_side {flex-direction: row;}

/*Masjid Al-Haram Plans*/
#makkahMap {
	font-family: "Poiret One";
	text-align: center;
	border-right: 1px solid rgba(0, 0, 0, 0.5)
}
.makka_map {width: 45%; padding: 0 2%;}

/*Prayer Times*/
#prayerTimes {
	font-family: "Poiret One";
	text-align: center;
}

/*Making a Space Between Title and Table*/
.prayer_spacing {
	border: none !important;
	font-size: 0.5em;
	background-color: #16A085;
}
#prayerTimetable {
	text-align: center;
	font-size: 1.25em;
	font-family: "Rajdhani";
	padding: 1em 0 0 0;
	margin: 0;
	border-spacing: 0;
	border-radius: 1em;
	color: #FFF;
	background-color: #16A085;
}
#prayerTimetable td {
	padding: 1em 4em;
}
#prayerTimetable tr:nth-child(even) {
	color: #000;
	background-color: #FFF;
}
#prayerTimetable tr:nth-child(3) td {border-top: 1px solid rgba(0, 0, 0, 0.35);}
#prayerTimetable td:last-child {padding: 1em 2em; border-left: 1px solid rgba(0, 0, 0, 0.35);}

/*Adjusting Border Radius*/
#prayerTimetable tr:last-child td:first-child {border-radius: 0 0 0 1em;}
#prayerTimetable tr:last-child td:last-child {border-radius: 0 0 1em 0;}



	</style>
</head>
<body id="homePage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">

		@include('user.pages.navbar')
		
		<container id="homeCont" class="main_container">
		<div id="firstPanel" class="panel main_panel">
		<h1 class="welcome_msg">Welcome to Makkah</h1>
		<iframe id="kaaba360" src="https://www.360tr.com/embed.php?vid=7697b4b28" frameborder="0" allowfullscreen data-token="k6f7rb"></iframe>
		</div>
		
		<div id="secondPanel" class="panel main_panel">
			<div id="makkahMap" class="cl-8 cl-t-12 cl-m panel_side">
				<h2>Map of Masjid Al-Haram</h2>
				<img class="makka_map1 makka_map" src="/Makkah/files/1.jpg" alt="Masjid Al-Haram Plan">
				<img class="makka_map2 makka_map" src="/Makkah/files/2.jpg" alt="Masjid Al-Haram Plan">
			</div>
			
			<div id="prayerTimes" class="cl-4 cl-t-12 cl-m panel_side">
				@if (Auth::guest())
				
				<div class="container"  style="display: none;" >
					<div id='gcw_mainFrYyTgw9q' class='gcw_mainFrYyTgw9q'></div>
					<script>function reloadFrYyTgw9q(){ var sc = document.getElementById('scFrYyTgw9q');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFrYyTgw9q';sc.src = 'https://freecurrencyrates.com/en/widget-vertical-editable?iso=SARKWDUSDEGPOMRIQDQARSYPYERTRYEUR&df=1&p=FrYyTgw9q&v=fits&source=fcr&width=400&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-120';var div = document.getElementById('gcw_mainFrYyTgw9q');div.parentNode.insertBefore(sc, div);} reloadFrYyTgw9q(); </script>
			</div>
			@else
			<div class="container">
				<div id='gcw_mainFrYyTgw9q' class='gcw_mainFrYyTgw9q'></div>
				<script>function reloadFrYyTgw9q(){ var sc = document.getElementById('scFrYyTgw9q');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFrYyTgw9q';sc.src = 'https://freecurrencyrates.com/en/widget-vertical-editable?iso=SARKWDUSDEGPOMRIQDQARSYPYERTRYEUR&df=1&p=FrYyTgw9q&v=fits&source=fcr&width=400&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-120';var div = document.getElementById('gcw_mainFrYyTgw9q');div.parentNode.insertBefore(sc, div);} reloadFrYyTgw9q(); </script>
		</div>

			@endif
			
			
			
				<h2>Prayers Times in Makkah</h2>
				
			</div>
	

		
</div>
		

		</container>
		
	@include('user.pages.footer')
	</div>
	
	<script src="/Makkah/script.js"></script>
	<script src="/Makkah/prayerTimesAPI.js"></script>
	<script src="/Makkah/hijriDate.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  <script src="program.js"></script>
	+
	
	<script>
		//Hiding Welcome Message on Clicking The BG
		$(document).ready(setTimeout(function() {
			$("#kaaba360").dblclick($(".welcome_msg").css({opacity: 0.25}))
		}, 5000))
		//Prayer Times API
	var date = new Date(); // today
	var times = prayTimes.getTimes(date, [43, -80], -5);
	var list = ['Fajr', 'Sunrise', 'Dhuhr', 'Asr', 'Maghrib', 'Isha', 'Midnight'];

	var html = '<table id="prayerTimetable">';
	html += '<tr><th colspan="2">'+ writeIslamicDate(-1) + '</th></tr><tr><td class="prayer_spacing"></td><td class="prayer_spacing"></td></tr>';
	for(var i in list)	{
		html += '<tr><td>'+ list[i]+ '</td>';
		html += '<td>'+ times[list[i].toLowerCase()]+ '</td></tr>';
	}
	html += '</table>';
	document.getElementById('prayerTimes').innerHTML += html;
		
		//Adjustment of Styling
		//Welcoming Message
		$(".welcome_msg").css({top: (($(window).height() / 2) - $(".welcome_msg").height()), left: (($(window).width() - $(".welcome_msg").outerWidth()) / 2)})
		//Second Panel Top Spacing
		$(".panel_side").css({marginTop: NavBarHeight, marginBottom: NavBarHeight})
		//Centerizing Prayer Times
		$("#prayerTimetable").css({marginLeft: (($("#prayerTimes").width() - $("#prayerTimetable").outerWidth()) / 2) + "px"})
		//Centerizing Map
		$(".makka_map1").css({marginBottom: (($(".panel_side").outerHeight() / 2) - ($(".makka_map1").height() / 2))})
		$(".makka_map2").css({marginBottom: (($(".panel_side").outerHeight() / 2) - ($(".makka_map2").height() / 2))})
	</script>
	
			

</body>