/*Navigation Bar Styling*/
//Adjustment of Styling
		var NavBarHeight = $("#topNav").height();
		var NavBarWidth = $("#topNav").width();
		var LeftHeaderWidth = $("#topLogo").width();
		var SubmitSearch = $("#searchSubmit");
		//Search Input
		$(".search").css({top: NavBarHeight, width: NavBarWidth / 1.1, right: (LeftHeaderWidth / 20) + 5});
		//Search Submit Button
		$("#searchSubmit").css({top: NavBarHeight, right: (LeftHeaderWidth / 20) + 5});
//Mobile Menu Icon
//Prepare
$(document).ready(function() {
	"use strict";
	for (var x = 0; x < 7; x++) {$("#parentNavMenu").children(x).addClass("nBtn");}
	$("#menuBtn").removeClass("nBtn");
});
//Action
$("#menuBtn").click(function() {
	"use strict";
	$(this).toggleClass("trans");
	$("#topNav").toggleClass("show");
});

//Drop Downs
function activate(btn) {
	"use strict";
	if (btn.classList.contains("srch_actvator")) {
		btn.classList.toggle("active");
		$("#searchBar").toggleClass("drop");
	}
	else {btn.classList.toggle("active");}
}
//To Close Drop Downs When Clicking Outside
$(document).click(function(e) {
	"use strict";
	if (!$(e.target).is(".top_nav_item, .top_nav_link") && $(".top_nav_item").hasClass("active")) 
	{$('.top_nav_item').removeClass('active');}
	
	else if (!$(e.target).is(".srch_actvator, .search_component") && $("#searchBar").hasClass("drop")) {
		$('.srch_actvator').removeClass("active");
		$("#searchBar").removeClass("drop");
	}
	else if (!$(e.target).hasClass("top_nav_item") && !$(e.target).is(".srch_actvator, .search_component") && $("#topNav").hasClass("show")) {
		$("#topNav").removeClass("show");
	}
});
//To Close Current Drop Down On Clicking Another One
$(".top_nav_item").click(function() {
	"use strict";
	if ($(".top_nav_item").hasClass("active")) {
		$(".top_nav_item").removeClass("active");
		$(this).addClass("active");}
	else {$(".top_nav_item").removeClass("active");}
});

//Header Onscrolling 
function ShadedNav() {
	"use strict";
	if ($(window).scrollTop() > $("#topHeader").height()) {
		$("#topHeader").addClass("moving");}
	else {$("#topHeader").removeClass("moving");}
}
$(document).ready(function() {"use strict"; ShadedNav();});
$(window).scroll(function() {"use strict"; ShadedNav();});

//FOOTER
$(".noprim_link").click(function() {
	"use strict";
	$(this).parent().toggleClass("active");
});