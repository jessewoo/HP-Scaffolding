//---------------------------------------------------------------------------
//PanelToggle.js
//Writen by: Jesse Woo
//Last modified: 4/29/14
//Purpose: Populates the Homepage Panel asynchronously. 
// 	* Show/Hide Submenu
//	* First default panel already loaded - show/hide
//	* Secondary panels are pulled via AJAX	
//---------------------------------------------------------------------------

$(document).ready(function() {	
	/* MAIN NAVIGATION LISTENER */
	$("#panel_mainnav ul li").click(function() {
		/* Reset all panels */
		$("#panel_mainnav ul li").removeClass("active");
		$("#panel_subnav ul li").removeClass("active");
		$("#panel_subnav").addClass("hide");
		$("#panel_subnav ul").addClass("hide");
		$("#panel_toggle-content").hide();
		$("#panel_toggle-content .panel_detailcontent").addClass("hide");
		
		/* Find specific ID */
		var mainnavId = $(this).attr('id');
		$(this).addClass("active");
		
		/* Activate the subnav, by building the subnav ID */
		var mainnavId_clean = mainnavId.replace("mainnav_", "");
		var subnavId = "#panel_subnav #subnav_".concat(mainnavId_clean);
		var subnav_primarypanel = "#panel_subnav #subnav_" + mainnavId_clean + " li:nth-child(2)";
		
		/* Welcome panel actions */
		if (mainnavId == 'mainnav_welcome') {
			/* Modify the columns in the panels */
			$("#panel_toggle-content").removeClass("col-md-8");
			$("#panel_toggle-content").addClass("col-md-10");
			$("#panel_toggle-content #welcome_rcsb_panel").removeClass("hide");
		}
		
		/* Other main nav actions - with submenus */
		else {
			$("#panel_toggle-content").removeClass("col-md-10");
			$("#panel_toggle-content").addClass("col-md-8");
			
			/* Hide other subnav > Show appropriate & specific subnav */
			$(subnavId).removeClass("hide");
			$("#panel_subnav ul li:nth-child(2)").addClass("active");
			$("#panel_subnav").removeClass("hide");
			
			/* Insert into Panel */
			var subnav_primarypanelId = $(subnav_primarypanel).attr('id');
			$("#" + subnav_primarypanelId + "_panel").removeClass("hide");	
		}	
		
		/* After condition, show content */
		$("#panel_toggle-content").show();
		
	}); /* End of Click Listener */
});

/* SUB NAVIGATION LISTENER */
$(document).on("click", "#panel_subnav ul li", function() {
	/* Reset the subnavigation */
	$("#panel_subnav ul li").removeClass("active");
	$("#panel_toggle-content .primary-panel").addClass("hide");	
	
	/* Find specific ID */
	var subnavId = $(this).attr('id');
	var primary_subnavId = "#" + subnavId + "_panel";
	$(this).addClass("active");
	
	/* Locate the files where AJAX where pull from */
	var directory_url = "/parts/panels-main/";
	var filetype = ".html"
	var panel_url = directory_url.concat(subnavId,filetype);
	
	/* Show primary panels that has already been loaded into DOM. Hide AJAX pulled data div. */
	if ($(this).hasClass('primary')) {
		$('#panel_toggle-content #panel_toggle-content_ajax').hide();
		$(primary_subnavId).removeClass("hide");
	}
	
	/* Not primary panels, pull data via AJAX. Insert HTML into #panel_toggle-content_ajax div */	
	else {
		$.ajax({
			url: panel_url,
			dataType: "html",
			error:function(jq, text, error){
				console.log('ERROR: ',jq,text,error);
				$('#panel_toggle-content #panel_toggle-content_ajax').empty();
			},
			success: function(data){			
				$('#panel_toggle-content #panel_toggle-content_ajax').html(data);
				$('#panel_toggle-content #panel_toggle-content_ajax').show();
			}
		});
	}
	
});