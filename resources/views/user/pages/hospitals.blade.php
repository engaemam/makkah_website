<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hospitals | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>
	#firstPanel {background-image: url("/Makkah/files/hospitals.jpg");}
	.service_card .header_pic {background-image: url("/Makkah/files/hospitals_cards.jpg");}
</style>
</head>
<body id="hospitalsPage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">
		@include('user.pages.navbar')
		<container id="homeCont" class="main_container">
		<div id="firstPanel" class="panel main_panel">
		</div>
		<div id="secondPanel" class="panel main_panel">
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d71181.84651095244!2d39.8109533718886!3d21.42449056008678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shospitals!5e0!3m2!1sen!2seg!4v1521409878777" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			<h1 class="welcome_msg">Hospitals in Makkah</h1>
		</div>
		<div id="thirdPanel" class="panel main_panel">
			@foreach($hospitals as $hospital)
			<div class="hospitals_card service_card card">
				<div class="header_pic">
					<h3>Hospital</h3>
				</div>
				<div class="info">
					<ul>

						<li>Name: {{$hospital['name']}}</li>
						<li>Rate: 
							<?php if(isset($hospital['rating'])){
							 for($i=0;$i<(int)$hospital['rating'];$i++){?>
							
							<i class="fa fa-star"></i>
							<?php }?>	
							<?php for($j=0;$j<(5)-(int)$hospital['rating'];$j++){?>
							<i class="far fa-star"></i>
							<?php } } else{
								echo 'No Rating Yet';
							} ?>
							
						</li>	
						<li>Reviews: ({{isset($hospital['reviews']) ?sizeof($hospital['reviews'])  : "No reviews"}})</li>
						<li>{{isset($hospital['opening_hours']['open_now']) ? "Opened Now" : "Closed Now"}}</li>
					    <li>Phone: {{isset($hospital['international_phone_number']) ?$hospital['international_phone_number']  : "No number"}}</li> 
						<li>Address: {{$hospital['formatted_address']}}</li>
						<li>Description: 
							@if(isset($hospital['reviews']))
							<?php for($i=0;$i<sizeof($hospital['reviews']) ;$i++){
							if($hospital['reviews'][$i]['text']!=" "){?>
							{{strlen($hospital['reviews'][$i]['text']) > 150 ? substr($hospital['reviews'][$i]['text'],0,150)."..." : $hospital['reviews'][$i]['text']}}
							<?php break;} }?>
							@else
							<?php echo 'No description added'; ?>
							@endif
						</li>
					</ul>
				</div>
			</div>
			@endforeach
			
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
		//Opacity on Map
		$(window).scroll(function() {
			if ($(window).scrollTop() > (NavBarHeight * 7.5)) {$(".welcome_msg").addClass("dimmed")}
			else {$(".welcome_msg").removeClass("dimmed")}})
		//Second Panel Top Spacing
		$(".panel_side").css({marginTop: NavBarHeight, marginBottom: NavBarHeight})
	</script>
</body>
</html>