<div id="homepage_panelslides" class="container">
	<div class="row" id="panel">
		<?php require 'parts/panels-nav/mainnav_subnav.html';?>
			
		<!-- Panel Content -->
		<div id="panel_toggle-content" class="panel_content col-xs-12 col-sm-12 col-md-10">
			<?php require 'parts/panels-main/welcome_rcsb.html';?>
			
			<!-- PRIMARY PANELS IN QUEUE - HIDDEN to START -->
			<?php require 'parts/panels-main/deposit_portal.html';?>
			<?php require 'parts/panels-main/search_drilldown.html';?>
			<?php require 'parts/panels-main/visualize_jmol.html';?>
			<?php require 'parts/panels-main/analyze_sequences.html';?>
			<?php require 'parts/panels-main/download_structures.html';?>
			<?php require 'parts/panels-main/learn_moleculeofmonth.html';?>
			
			<div id="panel_toggle-content_ajax">
				<!-- PANELS RETRIEVED IN AJAX : Not primary panels -->
			</div>	
		</div>
	</div>
</div>