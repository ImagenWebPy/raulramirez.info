// ******************************************************************************************
// Configuration Start		
// ******************************************************************************************

//*********************Google MAP *********************/
		
		var color = "#9E2811" // google map background colour
		var saturation = 100 // 
		var mapLatitude=-25.295621 
		var mapLongitude=-57.587747//(Fist Value Latitude, Second Value ), get YOUR coordenates here!: http://itouchmap.com/latlong.html
		var mapZoom_value=16 // Map zoom level parameter only numeric  


// Google map marker example 2 locations 
		//map-marker #1
		var marker1_Latitude=-25.295621 
		var marker1_Longitude=-57.587747
		var marker1_content="<h2>Raul Ramirez</h2> Saravi 588, Asu-PY" // marker or  on click content (Info Window) 
		var marker1_pointerUrl = 'http://raulramirez.info/assets/img/map-marker.png' // set your color pointer here!

//********************* Google MAP END *********************/



/**	 Piechart
 *****************************************************/

$(function() {
    $('.chart').easyPieChart({
        barColor: '#eb4f43',
		trackColor:"#d5d5d5",
		lineWidth:8
    });
});