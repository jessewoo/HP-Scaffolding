<!DOCTYPE html>
<html lang="en">
	<!-- Retrieves meta data, CSS calls in <head> tag -->
	<?php require 'parts/head_meta.html';?>

	<body>	
		<!-- Off Canvas Nav Bar  -->
		<?php require 'parts/navbar.html';?>
		
	    <div class="canvas">
			
			<!-- Top Navigation Bar -->	
			<div class="navbar navbar-default navbar-fixed-top">
				<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Header: RCSB PDB logo, search bar, partner brands -->
			<?php require 'parts/header.html';?>

			<!-- Panels Block -->
			<?php require 'parts/hp-panel3.php';?>
	
			<!-- New Structures - Features - News / Articles -->
			<?php require 'parts/newstructure_features_news.php';?>
	
			<!-- Footer: stats, common links -->
			<?php require 'parts/footer.html'; ?>
		
			<!-- Retrieves JS files -->
			<?php require 'parts/javascriptpackage.html'; ?>
		
		</div>
		<!-- Close the class="Canvas" -->	
		
	</body>
</html>