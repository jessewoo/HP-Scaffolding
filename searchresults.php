<!-- 
Author: Jesse Woo
Date Modified: 4/28/14
Content: Search Results when a user finishes searching
Edit Comments: Uses Bootstrap selector rather then the default use of browser selectors 
-->

<!DOCTYPE html>
<html lang="en">
	<!-- Retrieves meta data, CSS calls in <head> tag -->
	<?php require 'parts/head_meta_searchresults.html';?>

	<body>
		<!-- Top Navigation Bar -->
		<?php require 'parts/navbar.html';?>

		<!-- Header: RCSB PDB logo, search bar, partner brands -->
		<?php require 'parts/header.html';?>

		<div class="container">
			<!-- Search Results Inputs -->
			<?php require 'parts/searchresults/searchresults_inputs.php'; ?>

			<!-- Search Results View -->
			<?php require 'parts/searchresults/searchresults_view.php'; ?>
		</div>	
	
		<!-- Footer: stats, common links -->
		<?php require 'parts/footer.html'; ?>
		
		<!-- Retrieves JS files -->
		<?php require 'parts/javascriptpackage.html'; ?>
		
		<!-- Java Script Includes -->
		<script src="external-library/jquery-2.1.0/jquery-2.1.0.min.js"></script>
		<script src="external-library/bootstrap-3.1.1/js/bootstrap.min.js"></script>

		<!-- Bootstrap Slider Add on -->
		<script src="js/bootstrap-addons/bootstrap-slider.js"></script>
		<script>
			$('#xrayRange').slider();
		</script>

		<!-- Bootstrap DatePicker Add on -->
		<script src="js/bootstrap-addons/bootstrap-datepicker.js"></script>
		<script>
			$('#dp1').datepicker({
				format: 'mm/dd/yy'
			});
			$('#dp2').datepicker({
				format: 'mm/dd/yy'
			});
		</script>

		<!-- Bootstrap Selector -->
		<script src="js/bootstrap-addons/bootstrap-select.js"></script>
		<script>
			$('.selectpicker').selectpicker();
		</script>
	</body>
</html>