//If window resizes, executes function methodToFixSearchBar()
//Use for spacing purposes
$(window).on("resize", methodToFixSearchBar);	
function methodToFixSearchBar( e ) {
    var winWidth2 = $(window).width();
	console.log("Width: " + winWidth2);
	if (winWidth2 < 1181) {
		$('#mainsearch input').css('width','89%');
	}
	if (winWidth2 < 555) {
		$('#mainsearch input').css('width','84%');
	}
	if (winWidth2 > 1181) {
		$('#mainsearch input').removeAttr('style');
	}
}

$(document).ready(function() 
{
	var winWidth3 = $(window).width();
	console.log("Width Starting: " + winWidth3);
	if (winWidth3 < 1181) {
		$('#mainsearch input').css('width','89%');
	}
	if (winWidth3 < 555) {
		$('#mainsearch input').css('width','84%');
	}
	if (winWidth3 > 1181) {
		$('#mainsearch input').removeAttr('style');
	}
});