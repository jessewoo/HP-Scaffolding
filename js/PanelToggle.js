//---------------------------------------------------------------------------
//PanelToggle.js
//Writen by: Jesse Woo
//Last modified: 4/25/14
//Purpose: Populates the Homepage Panel asynchronously
//---------------------------------------------------------------------------

$(document).ready(function() {
	$("#mainnav_welcome").addClass("active");
	$("#panel_subnav").hide();
	
	
	/* MAIN NAVIGATION LISTENER */
	$("#panel_mainnav ul li").click(function() {
		$("#panel_mainnav ul li").removeClass("active");
		
		var mainnavId = $(this).attr('id');
		$(this).addClass("active");
		
		/* Building Subnav URL */
		var mainnavId_clean = mainnavId.replace("mainnav_", "");
		var directory_url = "/parts/panels-nav/subnav_";
		var filetype = ".html"
		var subnav_url = directory_url.concat(mainnavId_clean,filetype);
		
		if (mainnavId == 'mainnav_welcome') {
			$("#panel_subnav").hide();
			$("#panel_toggle-content").removeClass("col-md-8");
			$("#panel_toggle-content").addClass("col-md-10");
			$.ajax({
				url: '/parts/panels-main/welcome_rcsb.html',
				dataType: "html",
				error:function(jq, text, error){
					console.log('ERROR: ',jq,text,error);
				},
				success: function(data){
					$('#panel_toggle-content').html(data);
				}
			});
		}
		
		else {
			/* Glitch from Welcome to other panels */
			$("#panel_toggle-content").hide();
			$("#panel_toggle-content").removeClass("col-md-10");
			$("#panel_toggle-content").addClass("col-md-8");
			$("#panel_subnav").show();
			$("#panel_toggle-content").show();
			
			/* Insert into Panel Subnav */
			$.ajax({
				url: subnav_url,
				dataType: "html",
				error:function(jq, text, error){
					console.log('ERROR: ',jq,text,error);
				},
				success: function(data){				
					$('#panel_subnav').html(data);
					$("#panel_subnav ul li:nth-child(2)").addClass("active");
					
					/* Find ID of 2nd element of subnavigation */
					var firstsubnavId = $("#panel_subnav ul li:nth-child(2)").attr('id');
					
					var directory_url = "/parts/panels-main/";
					var filetype = ".html"
					var panel_firsturl = directory_url.concat(firstsubnavId,filetype);
					
					/* Insert into Content */
					$.ajax({
						url: panel_firsturl,
						dataType: "html",
						error:function(jq, text, error){
							console.log('ERROR: ',jq,text,error);
						},
						success: function(data){				
							$('#panel_toggle-content').html(data);
						}
					});
				} /* End of Success */	
			}); /* End of AJAX Call */
		} /* End of Else Condition */	
	}); /* End of Click Listener */
});

/* SUB NAVIGATION LISTENER */
$( document ).on("click", "#panel_subnav ul li", function() {
	$("#panel_subnav ul li").removeClass("active");
	var subnavId = $(this).attr('id');
	console.log(subnavId);
	$(this).addClass("active");
	
	var directory_url = "/parts/panels-main/";
	var filetype = ".html"
	var panel_url = directory_url.concat(subnavId,filetype);
	
	/* Insert into Content */
	$.ajax({
		url: panel_url,
		dataType: "html",
		error:function(jq, text, error){
			/* EMPTY OUT CONTENT - For now */
			$('#panel_toggle-content').empty();
		},
		success: function(data){				
			$('#panel_toggle-content').html(data);
		}
	});
	
});