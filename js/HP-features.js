//If window resizes, executes function methodToFixMiddleSection()
//Use for spacing purposes
$(window).on("resize", methodToFixMiddleSection);	
function methodToFixMiddleSection( e ) {
    var winWidth = $(window).width();
	if (winWidth < 992) {
		/* Redundancy */
		$('#middlesection #features').css('padding-right','0px');
		$('#middlesection #news').css('padding-left','0px');
		$('.tab-content .feature_block').removeClass("setFeatureBlockHeight");
	}
	if (winWidth < 768) {
		/* Redundancy */
		$('#middlesection .feature_block img').css('width','95%');
		$('#middlesection .feature_block .logo').removeAttr('style');
		$('#middlesection .feature_block .carousel img').css('width','70%');
		$('#middlesection .feature_block img').css('float','none');
		/* 
		$('#middlesection #newfeatures .feature_block img').removeAttr('style');
		$('#middlesection #toolhighlights .feature_block img').removeAttr('style');
		*/
	}
	else {
		/* Default */
		$('#middlesection #features').removeAttr('style');
		$('#middlesection #news').removeAttr('style');
		$('#middlesection .feature_block img').removeAttr('style');
		$('.tab-content .feature_block').addClass("setFeatureBlockHeight");
	}
}

/* wwPDB click */
$("#news .nav-tabs li a[data-toggle='tab']").click(function() {	
	$('#news').removeClass("wwPDB-Active");
});

$("#news .nav-tabs #wwpdbnewsTitle a").click(function() {	
	$('#news').addClass("wwPDB-Active");
});

/* Set the heights equal */
var winWidthStart = $(window).width();
if (winWidthStart > 991) {
	$('.tab-content .feature_block').addClass("setFeatureBlockHeight");
}
else {
	$('.tab-content .feature_block').removeClass("setFeatureBlockHeight");
}

	