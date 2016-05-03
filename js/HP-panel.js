$(document).ready(function()
{
	//If window starts, executes to fix submenu location
	var winWidthStart = $(window).width();
	if (winWidthStart < 500) {
		$('#panel_mainnav').css('width','65');
		$('#panel_mainnav .panel_submenu').css('left','65px');
		$('#panel_mainnav .mainnav_title').hide();
	}
	
	//If window resizes, executes function methodToFixLayout()
	$(window).on("resize", methodToFixLayout);	
	function methodToFixLayout( e ) {
	    var winHeight = $(window).height();
	    var winWidth = $(window).width();
		if (winWidth < 500) {
			/* Redundancy */
			$('#panel_mainnav').css('width','65');
			$('#panel_mainnav .panel_submenu').css('left','65px');
			$('#panel_mainnav .mainnav_title').hide();
		}
		else {
			/* Redundancy */
			$('#panel_mainnav').css('width','190');
			$('#panel_mainnav .panel_submenu').css('left','190px');
			$('#panel_mainnav .mainnav_title').show();
		}
	}
	
	/* Mouse over & mouse out: opens up submenu */
	$('.submenu_showright').mouseenter(function(event){
		$('.submenu_showright .mainnav_title').css('text-decoration','none');
		$(this).addClass("open");
	});
	$('.submenu_showright').mouseleave(function(event){
		$('.submenu_showright').removeClass("open");
		var winWidth = $(window).width();
		if (winWidth < 500) {
			/* Redundancy */
			$('#panel_mainnav .mainnav_title').hide();
			$('#panel_mainnav').css('width','65');
			$('#panel_mainnav .panel_submenu').css('left','65px');
		}
	});
	
	/* Toggle click: opens up submenu */
	$( ".submenu-toggle" ).click(function() {
		$(this).parent().toggleClass("open");
	});
	
	/* Click on submenu : retrieves panel information */
	$( ".submenu_showright .panel_submenu li a" ).click(function() {
		var SubmenuPanel = $(this).attr("href");
		SubmenuPanel = SubmenuPanel.replace("#","");
		console.log("Need to Retrieve '" + SubmenuPanel + "' Panel.");
		$('#panel_mainnav').css('width','65');
		$('#panel_mainnav .mainnav_title').hide();
		$('#panel_mainnav .panel_submenu').css('left','65px');
		$('.submenu_showright').removeClass("open");
	});
	
	/* Mouse over Panel Main Nav */
	$('#panel_mainnav').mouseenter(function(event){
	    var winWidth = $(window).width();
		if (winWidth < 500) {
			/* Redundancy */
			$('#panel_mainnav').css('width','65');
			$('#panel_mainnav .panel_submenu').css('left','65px');
			$('#panel_mainnav .mainnav_title').hide();
		}
		else {
			/* Redundancy */
			$('#panel_mainnav').css('width','190');
			$('#panel_mainnav .panel_submenu').css('left','190px');
			$('#panel_mainnav .mainnav_title').show();
		}
	});
	
	/* Hash in URL determine CONTENT */
	$('.panel_content').show();
	var panel = window.location.hash;
	
});