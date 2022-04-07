<header id="topHeader" class="cl-12 cl-t-12 cl-m main_header">
		<div id="topLogo" class="cl-4 cl-t-4 cl-hm top_logo">
			<a class="site_link" href="{{url('/')}}"><i id="topNavLogo" class="logo_pic"><img class="logo_pic" src="/Makkah/files/logo.png" alt="Makkah"></i>
			<h1 id="siteName" class="site_title">Makkah</h1></a>
		</div>
		<nav id="topNav" class="cl-6 cl-t-8 cl-hm main_nav">
					<ul id="parentNavMenu" class="parent_nav_menu">
					<a id="menuBtn" class="top_nav_link main_menu_btn mobile-only"><li class="top_nav_item">Menu</li></a>
					<a href="{{url('/')}}" class="top_nav_link"><li class="top_nav_item">home</li></a>
					<a class="top_nav_link"><li class="top_nav_item" onClick="activate(this)">servieces<br>
					<ul id="serviceDrop" class="dropdown_list">
						<a id="hotels" class="service_link" href="{{url('/hotels')}}"><li class="service_item">hotels</li></a>
						<a id="hospitals" class="service_link" href="{{url('/hospitals')}}"><li class="service_item">hospitals</li></a>
						<a id="embassies" class="service_link" href="{{url('/embassies')}}"><li class="service_item">embassies</li></a>
						<a id="resturants" class="service_link" href="{{url('/resturants')}}"><li class="service_item">resturants</li></a>
						<a id="marketPlaces" class="service_link" href="{{url('/markets')}}"><li class="service_item">marketplaces</li></a>
						<a id="emergencies" class="service_link" href="{{url('/emergencies')}}"><li class="service_item">emergencies</li></a>
						<a id="transportation" class="service_link" href="{{url('/transportation')}}"><li class="service_item">transportation</li></a>
					</ul></li></a>
					<a class="top_nav_link"><li class="top_nav_item" onClick="activate(this)">manasik
					<ul id="manaskDrop" class="dropdown_list">
						<a id="hejj" class="service_link" href="{{url('/hejj')}}"><li class="service_item">hejj</li></a>
						<a id="umera" class="service_link" href="{{url('/umra')}}"><li class="service_item">umera</li></a>
						<a id="manaskDates" class="service_link" href="{{url('/calendar')}}"><li class="service_item">calendar</li></a>
					</ul></li></a>
					<a href="https://quran.com" target="_blank" class="top_nav_link"><li class="top_nav_item">quraan</li></a>
					<a href="https://sunnah.com" target="_blank" class="top_nav_link"><li class="top_nav_item">sunnah</li></a>

					<a class="top_nav_link"><li class="top_nav_item" onClick="activate(this)">
							@if(Auth::check())
						{{Auth()->user()->name}}
						@else
						Account
						@endif
						<ul id="manaskDrop" class="dropdown_list">
							@if(Auth::check())
							<a href="{{url('/logout')}}" class="service_link"><li class="service_item">Logout</li></a>
							@else
							<a href="{{url('/login')}}" class="service_link"><li class="service_item">Login</li></a>
							<a href="{{url('/register')}}" class="service_links"><li class="service_item">Register</li></a>
							@endif	
							
						</ul></li></a>
					
				</ul>			
				</nav>
</header>				