<div class="col-xs-4 col-md-4" id="refinedsearch">
	<form id="refiningSearchForm">
		<h4>Explore & Refine Your Search</h4>
		<p>Drill into Biological Structure Categories</p>
		<ul>
			<li>
				<img src="/images/panel_search/icon_organism.jpg">Organism
				<select class="form-control input-sm selectpicker">
					<option>Human immunodeficiency virus 1 (986)</option>
					<option>Homo sapiens (495)</option>
					<option>HIV-1 M:B_HXB2R (88)</option>
					<option>Mus musculus (85)</option>
					<option>Human immunodeficiency virus(64)</option>
					<option>HIV-1 M:B_ARV2/SF2 (60)</option>
					<option>Other (402)</option>
				</select>	
			</li>
			<li>
				<img src="/images/panel_search/icon_taxonomy.jpg">Taxonomy
				<select class="form-control input-sm selectpicker">
					<option>Viruses (1556)</option>
					<option>Eukaryota (675)</option>
					<option>Unassigned (123)</option>
					<option>Bacteria (76)</option>
					<option>Other (25)</option>
					<option>Archaea (5)</option>
				</select>
			</li>
			<li>
				<img src="/images/panel_search/icon_xray.jpg">X-Ray Resolution
				<input type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" id="xrayRange" >
			</li>
			<li>
				<img src="/images/panel_search/icon_experimentaldata.jpg">Experiment Method
				<select class="form-control input-sm selectpicker">
					<option>X-ray (1824)</option>
					<option>Solution NMR (263)</option>
					<option>Electron Microscopy (56)</option>
					<option>Solid-State NMR (5)</option>
					<option>Other (2)</option>
					<option>Electron Crystallography (1)</option>
					<option>Neutron Diffraction (1)</option>
					<option>Hybrid (1)</option>
				</select>	
			</li>
			<li>
				<img src="/images/panel_search/icon_stoichiometry.jpg">Protein Stoichiometry
				<select class="form-control input-sm selectpicker">
					<option>Homomer (984)</option>
					<option>Heteromer (618)</option>
					<option>Monomer (308)</option>
					<option>more choices...</option>
				</select>
			</li>
			<li>
				<img src="/images/panel_search/icon_membrane.jpg">Membrane Proteins
				<select class="form-control input-sm selectpicker">
					<option>CXCR4 chemokine receptor comple ... (5)</option>
					<option>CCR5 chemokine receptor with bo ... (1)</option>
				</select>
			</li>
			<li>
				<img src="/images/panel_search/icon_releasedate.jpg">Release Date
				<div class="DateSelection">
					<input type="text" class="form-control input-sm releaseDate-start" value="02/16/14" id="dp1" >
					<span>-</span>
					<input type="text" class="form-control input-sm releaseDate-end" value="02/28/14" id="dp2" >
				</div>
			</li>
			<li>
				<img src="/images/panel_search/icon_polymer.jpg">Polymer Type
				<select class="form-control input-sm selectpicker">
					<option>Protein (1984)</option>
					<option>RNA (79)</option>
					<option>Mixed (76)</option>
					<option>DNA (14)</option>
				</select>
			</li>
			<li>
				<img src="/images/panel_search/icon_enzyme.jpg">Enzyme Category
				<select class="form-control input-sm selectpicker">
					<option>3: Hydrolases (849)</option>
					<option>2: Transferases (364)</option>
					<option>5: Isomerases (26)</option>
					<option>6: Ligases (5)</option>
					<option>1: Oxidoreductases (1)</option>
				</select>
			</li>
			<li>
				<img src="/images/panel_search/icon_scop.jpg">SCOP Category
				<select class="form-control input-sm selectpicker">
					<option>All beta proteins (529)</option>
					<option>Alpha and beta proteins (a/b) (128)</option>
					<option>Alpha and beta proteins (a+b) (119)</option>
					<option>Multi-domain proteins (alpha an ... (113)</option>
					<option>All alpha proteins (57)</option>
					<option>Peptides (55)</option>
					<option>Coiled coil proteins (51)</option>
					<option>Other (26)</option>
				</select>
			</li>
			<li>
				<img src="/images/panel_search/icon_symmetry.jpg">Protein Symmetry
				<select class="form-control input-sm selectpicker">
					<option>Cyclic (986)</option>
					<option>Asymmetric (906)</option>
					<option>Dihedral (14)</option>
					<option>Helical (3)</option>
					<option>Icosahedral (1)</option>
					<option>more choices...</option>
				</select>
			</li>
		</ul>
	</form>	
	<div id="searchsuggestions">
		<h4>Search Suggestions</h4>
		<?php require 'searchresults_suggestions.php'; ?>
	</div>						
</div>