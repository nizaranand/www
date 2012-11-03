<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<style type="text/css">
/*			html {
				height: 100%
			}
			body {
				height: 100%;
				margin: 0;
				padding: 0
			}*/
			#map_canvas {
				height: 100%
			}
		</style>
		<link rel="stylesheet" href="jquery.mobile-1.1.1.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
		<script src="jquery.mobile-1.1.1.min.js"></script>
		<script type="text/javascript"
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBNEuIFL43dkYvGC8khpqXju86Mt-xdtrs&sensor=false"></script>
		<script src="script.js"></script>
	</head>
	<body onload="initialize()">
		<div data-role="page">

			<div data-role="header" data-theme="">
				<a href="#page1" data-icon="gear" style="display:none">Settings</a>
				<h1>Welcome Back Evan!</h1>
				<a href="#" data-icon="gear" onclick="document.getElementById('').style.display='none'">Settings</a>
				<div data-role="navbar">
					<ul>
						<li>
							<a href="#routes" data-role="button" data-transition="flip">Routes</a>
						</li>
						<li>
							<a href="@page2" data-role="button" data-shadow="false">Settings</a>
						</li>
						<li>
							<a href="@page3" data-role="button" data-shadow="true">Logout</a>
						</li>
					</ul>
				</div>
			</div><!-- /header -->

			<div data-role="content" data-theme="" style='padding:0' style='height:100%'>
				<div data-role="content" id='search_section' style='position:absolute; width:20%; height:85%; background:white;'>
					<input type="text" name="search_text" id="search_text" value="Search Query" onclick="value=''"/>
					<button data-icon="search" >Go!</button>
					<ul id="search_result_list" data-role="listview" style="margin-top:15px">
						<li><a href="acura.html">Arbutus Park</a></li>
						<li><a href="audi.html">Arbutus Village Park</a></li>
						<li><a href="bmw.html">Arbutus Greenway Park</a></li>
					</ul>
<!-- 					<div style='position:absolute; bottom:10%;'>
						<label for="select-choice-min" class="select">Show On Map:</label>
						<select name="map_options" id="map_options" data-mini="true">
						   <option value="all">All</option>
						   <option value="pks">Parks</option>
						   <option value="ccs">Community Centers</option>
						   <option value="bws">Bike Ways</option>
						</select> 
					</div> -->
					<div data-role="fieldcontain" style="position:absolute; bottom:10%;	width:100%;">
					    <fieldset data-role="controlgroup">
						   <input type="checkbox" name="bikeways-checkbox" id="bikeways-checkbox" class="custom" data-mini="true" checked='checked' />
						   <label for="bikeways-checkbox">BikeWays</label>
						   <input type="checkbox" name="parks-checkbox" id="parks-checkbox" class="custom" data-mini="true" checked='checked' />
						   <label for="parks-checkbox">Parks</label>
						   <input type="checkbox" name="cc-checkbox" id="cc-checkbox" class="custom" data-mini="true" checked='checked' />
						   <label for="cc-checkbox">CommunityCenters</label>
					    </fieldset>
					</div>
				</div>
				<div id="map_canvas" style="position:absolute; width:78%; height:85%; right:0px;"></div>
			</div>

			<!-- /content -->

			<div data-role="footer" data-theme="">
				<a href='#' data-role='button' data-icon='plus'>Add</a>
				<a href='#' data-role='button' data-icon='arrow-u'>Up</a>
				<a href='#' data-role='button' data-icon='arrow-d'>Down</a>
			</div>

		</div><!-- /page -->

		<div data-role="page" id="routes" data-add-back-btn="true" data-back-btn-theme="">
			<div data-role="header">
				<h1>Courses</h1>
				<div data-role="navbar">
					<ul>
						<li>
							<a href="#routes" data-role="button" data-transition="slide">Routes</a>
						</li>
						<li>
							<a href="@page2" data-role="button" data-shadow="false">Settings</a>
						</li>
						<li>
							<a href="@page3" data-role="button" data-shadow="true">Logout</a>
						</li>
					</ul>
				</div>
			</div>
			<div data-role="content">
				<a href='#' data-role='button'>Route 1</a>
				<a href='#' data-role='button'>Route 2</a>
				<a href='#' data-role='button'>Route 3</a>
				<a href='#' data-role='button'>Route 4</a>
				<a href='#' data-role='button'>Route 5</a>
			</div>
			<div data-role="footer">
				<a href='#' data-role='button' data-icon='plus'>Add</a>
				<a href='#' data-role='button' data-icon='arrow-u'>Up</a>
				<a href='#' data-role='button' data-icon='arrow-d'>Down</a>
			</div>
		</div>
	</body>
</html>