<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Restaurants | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>
	#firstPanel {background-image: url("/Makkah/files/restaurants.jpg");}
	.service_card .header_pic {background-image: url("/Makkah/files/restaurants_cards.jpg");}
</style>
</head>
<body id="restaurantsPage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">
		@include('user.pages.navbar')
		<container id="homeCont" class="main_container">
		<div id="firstPanel" class="panel main_panel">
		</div>
		<div id="secondPanel" class="panel main_panel">
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d118851.87880279853!2d39.810953319303515!3d21.424480117421954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srestaurants!5e0!3m2!1sen!2seg!4v1521412544120" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			<h1 class="welcome_msg">Restaurants in Makkah</h1>
		</div>
		<div id="thirdPanel" class="panel main_panel">				
			@foreach($resturants as $resturant)
			<div class="restaurants_card service_card card">
				<div class="header_pic">
					<h3>Resturant</h3>
				</div>
				<div class="info">
					<ul>

						<li>Name: {{$resturant['name']}}</li>
						<li>Rate: 
							<?php if(isset($resturant['rating'])){
							 for($i=0;$i<(int)$resturant['rating'];$i++){?>
							
							<i class="fa fa-star"></i>
							<?php }?>	
							<?php for($j=0;$j<(5)-(int)$resturant['rating'];$j++){?>
							<i class="far fa-star"></i>
							<?php } } else{
								echo 'No Rating Yet';
							} ?>
							
						</li>	
						<li>Reviews: ({{isset($resturant['reviews']) ?sizeof($resturant['reviews'])  : "No reviews"}})</li>
						<li>{{isset($resturant['opening_hours']['open_now']) ? "Opened Now" : "Closed Now"}}</li>
					    <li>Phone: {{isset($resturant['international_phone_number']) ?$resturant['international_phone_number']  : "No NN"}}, {{isset($resturant['formatted_phone_number']) ?$resturant['formatted_phone_number']  : ""}}</li> 
						<li>Address: {{$resturant['formatted_address']}}</li>
						<li>Description: 
							@if(isset($resturant['reviews']))
							<?php for($i=0;$i<sizeof($resturant['reviews']) ;$i++){
							if($resturant['reviews'][$i]['text']!=" "){?>
							{{strlen($resturant['reviews'][$i]['text']) > 150 ? substr($resturant['reviews'][$i]['text'],0,150)."..." : $resturant['reviews'][$i]['text']}}
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