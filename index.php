<!--

/**
 * @ngdoc function
 * @name: index.php
 * @description: grid topview data backend
 * # Index.php
 * Developer by Christian Manrique - Software enginner
 */

-->

<!DOCTYPE html>
<html lang="en-us">	
	<head>
		<meta charset="utf-8">
		<title>TopView test project v1.0</title>
		<meta name="description" content="">
		<meta name="author" content="Christian Manrique"> 
		<!--  JQUERY -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism-okaidia.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/plugins/unescaped-markup/prism-unescaped-markup.css">

		<link rel="stylesheet" href="https://cdn.rawgit.com/toni-heittola/js-datatable/master/css.min/bootstrap-table.min.css">
		<link rel="stylesheet" href="https://cdn.rawgit.com/toni-heittola/js-datatable/master/css.min/bootstrap-table-filter-control.min.css">
		<link rel="stylesheet" href="https://cdn.rawgit.com/toni-heittola/js-datatable/master/css.min/datatable.min.css">
	
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/prism.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-javascript.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-markup.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-json.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-yaml.min.js"></script>

		<script type="text/javascript" src="https://cdn.rawgit.com/toni-heittola/js-datatable/master/js.min/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="https://cdn.rawgit.com/toni-heittola/js-datatable/master/js.min/bootstrap-table-filter-control.min.js"></script>

		<script type="text/javascript" src="https://cdn.rawgit.com/toni-heittola/js-datatable/master/js.min/Chart.bundle.min.js"></script>
		<script type="text/javascript" src="https://cdn.rawgit.com/toni-heittola/js-datatable/master/js.min/js-yaml.min.js"></script>

		<script type="text/javascript" src="https://cdn.rawgit.com/toni-heittola/js-datatable/master/js.min/datatable.min.js"></script>
	
    
		 <style>
			.header_info_left h2 {
			
				font-weight: bold;
				letter-spacing: -2px;
				font-size: 36px;
				margin-top: 0;
				margin-bottom: 20px;
				position: relative;
				margin-left: 25px;
			}
			.ficha-tecnica h2:before{
				background-color: #3449e4;
				
				position: absolute;
				width: 20px;
				height: 30px;
				background-color: #3449e4;
				content: '';
				left: -30px;
				top: 15px;
				
			}
			
			.header_info_left hr {
				border-top: 1px solid #3449e4;
				margin-top: 40px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="assets/images/logotopviewNYC.png" class="img-responsive" />
				</div>
				
				<div class="col-md-8">
				
					<div class="row header_info_left">
						<div class="col-md-8">
							<h2>TopView test project v1.0</h2>
						</div>
						<div class="col-md-4">
							<hr></hr>
						</div>
						
					</div>
					<div class="row ">	
						<div class="col-md-12">
						<h4>Jaime Salazar | TopView Sightseeing</h4>
						
						<h6>Author: Christian Manrique</h6>
						</div>
					</div>
				</div>
			</div>	
		
			<div class="row">
				<div class="col-md-12">
					<table id="dynamic-table-1" class="table datatable"
						   data-json="data/data.json"
						   data-rank-mode="normal"
						   data-id-field="name"
						   data-sort-name="cur"
						   data-sort-order="desc"
						   data-pagination="true"
						   data-show-pagination-switch="false">
						<thead>
							<tr>
								<th data-field="cur" data-sortable="true">Currency</th>
								<th data-field="15m" data-sortable="true" data-value-type="float2">15m</th>
								<th data-field="last" data-sortable="true" data-value-type="float2"  >Last</th>
								<th data-field="buy" data-sortable="true" data-value-type="float2" >Buy</th>
								<th data-field="sell" data-sortable="true" data-value-type="float2">Sell</th>
								<th data-field="symbol" data-sortable="true">Symbol</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>	
			
			<div class="row">
				<div class="col-md-12">
					<br>
				</div>
			</div>	
		</div>	
		
		<script>
			$( document ).ready(function() {
				$('#dynamic-table-1').datatable({});
			});
		</script>
	</body>
</html>


