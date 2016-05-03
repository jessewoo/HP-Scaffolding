<div id="homepage_middlesection" class="container">
	<div class="row" id="middlesection">
		<!-- COLUMN ONE: New Structures Carousel -->
		<div class="col-xs-12 col-sm-12 col-md-4" id="lateststructure">
			<?php require 'parts/features-tabs/lateststructure.html';?>
		</div>
		
		<!-- COLUMN TWO: New Structures Carousel -->
		<div class="col-xs-12 col-sm-6 col-md-4" id="newfeatures">
			<?php require 'parts/features-tabs/newfeatures.html';?>
		</div>
		
		<!-- COLUMN THREE: News - Publications Section -->
		<div class="col-xs-12 col-sm-6 col-md-4" id="news">
			<!-- News & Publications Tabs -->
			<ul class="nav nav-tabs">
			  <li class="active"><a href="#rcsbnews" data-toggle="tab"><h3>News</h3></a></li>
			  <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      Publications <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
					<li><a href="#featuredsystems" data-toggle="tab">PSI Featured Systems</a></li>
					<li><a href="#moleculeofthemonth" data-toggle="tab">Molecule of the Month</a></li>
					<li><a href="#quarterlynews" data-toggle="tab">Quarterly Newsletter</a></li>
					<li><a href="#annualreport" data-toggle="tab">Annual Report</a></li>
					<li><a href="http://www.rcsb.org/pdb/explore/news.do?p=general_information/news_publications/news/news_2014.html">All RCSB Weekly News</a></li>
					<li><a href="http://www.rcsb.org/pdb/static.do?p=general_information/news_publications/articles/index.html">Published in Journals & Books</a></li>
			    </ul>
			  </li>
			</ul>
			
			<!-- Tab panes - CONTENT-->
			<div class="tab-content" id="news_content">
			  <div class="tab-pane active" id="rcsbnews">
				  <?php require 'parts/features-tabs/news.html';?>	
			  </div>
			  <div class="tab-pane" id="featuredsystems">
		 			<?php require 'parts/features-tabs/featuredsystems.html';?>
			  </div>
			  <div class="tab-pane" id="moleculeofthemonth">
					<?php require 'parts/features-tabs/moleculeofthemonth.html';?>
			  </div>
			  <div class="tab-pane" id="quarterlynews">
			  	  <?php require 'parts/features-tabs/quarterlynews.html';?>
			  </div>
			  <div class="tab-pane" id="annualreport">
			  	  <?php require 'parts/features-tabs/annualreport.html';?>
			  </div>
			</div>
		</div>
		<!-- COLUMN THREE: END -->	
	</div>
</div>