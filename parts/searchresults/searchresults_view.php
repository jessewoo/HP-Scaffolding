<div class="col-xs-8 col-md-8" id="searchresults">
	<h4>Search Results</h4>
	<form class="form-inline" id="results_filter" role="form">
		<div class="form-group">
			<label for="sortSearchResults">Sort</label>
			<select class="form-control input-sm selectpicker" id="sortSearchResults">
				<option>Relevance</option>
				<option>PDB ID</option>
				<option>Recent to Oldest</option>
				<option>Oldest to Recent</option>
				<option>Alphabetical Name</option>
				<option>Alphabetical Author Name</option>
				<option>Release date</option>
				<option>Residue Count</option>
			</select>
		</div>
		<!-- Split button -->
		<div class="form-group">
			<label for="viewSearchResults">View</label>
			<div class="btn-group" id="viewSearchResults">
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th-large"></span> Tiles</button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				  <span class="caret"></span>
				  <span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Detail List</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-time"></span> Timeline</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-th"></span> Compact</a></li>
				  <li class="divider"></li>
				  <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Customize</a></li>
				</ul>
			</div>
		</div>
	</form>
	<div class="clearfix"></div>
	
	<!-- Search Results -->
	<?php require 'searchresults_results.php'; ?>
</div>