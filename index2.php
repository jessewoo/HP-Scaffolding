<!DOCTYPE html>
<html lang="en">
	<!-- Retrieves meta data, CSS calls in <head> tag -->
	<head>
		<style>
			.graph {
				width: 100%;
				height: 175px;
			} 
		</style>
	</head>	

	<body>
		<div class='graph' id='pieChartDrillDownDiv_0'>&nbsp;</div>
				<div class='graph' id='pieChartDrillDownDiv_1'>&nbsp;</div>
	    <div class='graph' id='pieChartDrillDownDiv_8'>&nbsp;</div>
	    <p>How Come I Don't Get this!!</p>
		
		
		<script src="external-library/jquery-2.1.0/jquery-2.1.0.min.js"></script>

		<!-- FLOT Charts Plug in -->
		<script language="javascript" type="text/javascript" src="/external-library/flot-0.8.3/jquery.flot.js"></script>
		<script language="javascript" type="text/javascript" src="/external-library/flot-0.8.3/jquery.flot.pie.js"></script>

		<script>

//http://stackoverflow.com/questions/12209475/flot-pie-graph-rendering-problems
//http://stackoverflow.com/questions/19954571/ajax-requested-json-not-populating-flot-chart
//http://stackoverflow.com/questions/19214887/how-do-i-get-json-and-push-it-into-html-with-jquery
			$(document).ready(function(){
			    // Get all the data associated with the drill down
			    $.getJSON("http://rcsb.org/pdb/json/summary.do?global=true", function(data){
					
					//console.log(data);
					// Create data array outside of for loop, scoping issues	
			        var MasterPieArray = [];
					  var SinglePieArray = [];					  

			        // For Loop through the JSON data of drill down
			        $.each(data, function(i,item) {
						if (i == 0){
						    var pieChartColors = ["#AEC68A", "#9E6F53", "#C26E60"];
							 var k = "0";
//			            var pieChartColors=["#AEC68A","#9E6F53","#C26E60",'#01C08F','#060407','#F1B296','#86D1BA','#969FA6','#F2F2F2','#666666'];


			            //MasterPieArray[i] = "";
						//document.write("\tMasterPieArray[" + i + "] = [\n");
			            $.each(item.groups, function(k, group) {
								var PieObject = {};
			                //var itemURL = group.url;
			                //var itemID = group.id;
			                var itemLabel = group.label;
			                var itemPopulation = group.population;
			                //var itemPercent = group.percent;
							console.log("["+itemLabel+"]");
							console.log("["+itemPopulation+"]");
							console.log("["+pieChartColors[k]+"]");
							
							PieObject.label = itemLabel;
							PieObject.data = itemPopulation;
							PieObject.color = pieChartColors[0];
							SinglePieArray.push(PieObject);
							
							//document.write("\t{label: '" + itemLabel + "', data: " + itemPopulation + ", color: '" + pieChartColors[k] + "'},\n");

			            });
			            // Remove the last comma
			            //MasterPieArray[i] = MasterPieArray[i].slice(0,-1);
			            //MasterPieArray[i] += ";";
						//document.write("\n]");
						//MasterPieArray[i] = <?php echo json_encode($MasterPieArray[i]); ?>;
			            //console.log("MasterPieArray " + i + " = " + MasterPieArray[i]);
			}

			        });
					  MasterPieArray.push(SinglePieArray);
					  SinglePieArray = [];
			        console.log("MasterPieArray[0] = " + MasterPieArray[0]);
			        //console.log("MasterPieArray[1] = " + MasterPieArray[1]);
			        //console.log("MasterPieArray[2] = " + MasterPieArray[2]);
					//console.log("MasterPieArray[8] coming from Server = " + MasterPieArray[8]);
			        
					// MasterPieArray[2] = document.write(MasterPieArray[2]);
					
					// Overrode
					MasterPieArray[8] = [
					        { label: "Homo sapiens",  data: 25399, color: '#F7464A', url: '#1'},
					        { label: "Escherchia coli",  data: 4818, color: '#E2EAE9', url: '#2'},
					        { label: "Mus musculus",  data: 4296, color: '#D4CCC5', url: '#3'},
					        { label: "Saccharomyces cerevisiae",  data: 2305, color: '#949FB1', url: '#4'},
					        { label: "Bos taurus",  data: 2297, color: '#E0E4CC', url: '#5'},
					        { label: "Rattus norvegicus",  data: 2108, color: '#69D2E7', url: '#6'},
					        { label: "Escherichia coli K-12",  data: 1898, color: '#666666', url: '#7'},
					        { label: "Other",  data: 54414, color: '#4D5360', url: '#8'}
					];
					console.log("MasterPieArray[8] in JS = " + MasterPieArray[8]); 

			        // Options of the build PIE CHART
			        var options = {
			            series: {
			                pie: {
			                    show: true
			                }
			            }
			        }

			        $.plot('#pieChartDrillDownDiv_0', MasterPieArray[0], options);
			MasterPieArray[0]=[{label:"Homo sapiens",data:"25842",color:"#AEC68A"},{label:"Homo sapiens",data:"55842",color:"#AEC68A"}];
						        $.plot('#pieChartDrillDownDiv_1', MasterPieArray[0], options);
			        //$.plot('#pieChartDrillDownDiv_1', MasterPieArray[1], options);
			        //$.plot('#pieChartDrillDownDiv_2', MasterPieArray[2], options);
			        $.plot('#pieChartDrillDownDiv_8', MasterPieArray[8], options);

			    });
			});
		</script>
	</body>
</html>
