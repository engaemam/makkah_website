<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marketplaces | Makkah</title>
<link rel="stylesheet" href="/Makkah/style.css">
<link rel="stylesheet" href="/Makkah/services.css">
<link rel="stylesheet" href="/Makkah/files\fontawesome-free-5.0.8\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="icon" href="/Makkah/files/logo.png">
<style>
	#firstPanel {background-image: url("/Makkah/files/marketplaces.JPG");}
	.service_card .header_pic {background-image: url("/Makkah/files/marketplaces_cards.JPG");}
</style>
</head>
<body id="marketplacesPage">
	<div id="generalPanel" class="cl-12 cl-t-12 cl-m general_panel">
		@include('user.pages.navbar')
		<container id="homeCont" class="main_container">
		<div id="firstPanel" class="panel main_panel">
		</div>
		<div id="secondPanel" class="panel main_panel">
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d237729.0747006229!2d39.78110906639466!3d21.408922815297984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smarket!5e0!3m2!1sen!2seg!4v1521415378207" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			<h1 class="welcome_msg">Marketplaces in Makkah</h1>
		</div>
		<div id="thirdPanel" class="panel main_panel">
			@foreach($markets as $market)
			<div class="marketplaces_card service_card card">
				<div class="header_pic">
					<h3>Marketplace</h3>
				</div>
				<div class="info">
					<ul>

						<li>Name: {{$market['name']}}</li>
						<li>Rate: 
							<?php if(isset($market['rating'])){
							 for($i=0;$i<(int)$market['rating'];$i++){?>
							
							<i class="fa fa-star"></i>
							<?php }?>	
							<?php for($j=0;$j<(5)-(int)$market['rating'];$j++){?>
							<i class="far fa-star"></i>
							<?php } } else{
								echo 'No Rating Yet';
							} ?>
							
						</li>	
						<li>Reviews: ({{isset($market['reviews']) ?sizeof($market['reviews'])  : "No reviews"}})</li>
						<li>{{isset($market['opening_hours']['open_now']) ? "Opened Now" : "Closed Now"}}</li>
					    <li>Phone: {{isset($market['international_phone_number']) ?$market['international_phone_number']  : "No NN"}}, {{isset($market['formatted_phone_number']) ?$market['formatted_phone_number']  : ""}}</li> 
						<li>Address: {{$market['formatted_address']}}</li>
						<li>Description: 
							@if(isset($market['reviews']))
							<?php for($i=0;$i<sizeof($market['reviews']) ;$i++){
							if($market['reviews'][$i]['text']!=" "){?>
							{{strlen($market['reviews'][$i]['text']) > 150 ? substr($market['reviews'][$i]['text'],0,150)."..." : $market['reviews'][$i]['text']}}
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