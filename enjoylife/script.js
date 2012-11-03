var map;
var kmlLayerOptions;
var parkKml;
var communitycenterKml;
var bikewayKml;
function initialize() {
	var mapOptions = {
		center : new google.maps.LatLng(49.2505, -123.1119),
		zoom : 13,
		mapTypeId : google.maps.MapTypeId.ROADMAP,
	};

	map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	kmlLayerOptions = {
		map : map,
		preserveViewport : true,
		suppressInfoWindows : true
	}
	bikewayKml = new google.maps.KmlLayer("http://data.vancouver.ca/download/kml/bikeways.kmz", kmlLayerOptions);
	communitycenterKml = new google.maps.KmlLayer("http://data.vancouver.ca/download/kml/community_centres.kmz", kmlLayerOptions);
	parkKml = new google.maps.KmlLayer("http://data.vancouver.ca/download/kml/park_polygons.kmz", kmlLayerOptions);

}
function showParks() {
	parkKml.setMap(map);
}
function hideParks() {
	parkKml.setMap(null);
}
function showCommunityCenters() {
	communitycenterKml.setMap(map);
}
function hideCommunityCenters() {
	communitycenterKml.setMap(null);
}
function showBikeWays() {
	bikewayKml.setMap(map);	
}
function hideBikeWays() {
	bikewayKml.setMap(null);
}
function addMarker(LatLng) {
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(49.249783,-123.155250),
		map: map,
		title: "test"
	});
}

$(document).ready(function() {
	$("#map_options").on("change", function() {
		id = ($("#map_options option:selected").attr('value'));
		if (id == "all") {
			initialize();
		}
		if (id == "pks") {
			showParks();
		}
		if (id == "ccs") {
			showCommunityCenters();
		}
		if (id == "bws") {
			showBikeWays();
		}
	})

	$('input[type=checkbox]').on("change", function() {
		var id = $(this).attr('id');
		var checked = $(this).attr('checked');
		if (id == "bikeways-checkbox") {
			if (checked == "checked") {
				showBikeWays();
			} else {
				hideBikeWays();
			}
		} else if (id == "parks-checkbox") {
			if (checked == "checked") {
				showParks();
			} else {
				hideParks();
			}
		} else if (id == "cc-checkbox") {
			if (checked == "checked") {
				showCommunityCenters();
			} else {
				hideCommunityCenters();
			}
		}
	})
});