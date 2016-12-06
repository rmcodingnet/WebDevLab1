<script>
var locations = [
    ['Title A', 3.180967,101.715546, 1],
    ['Title B', 3.200848,101.616669, 2],
    ['Title C', 3.147372,101.597443, 3],
    ['Title D', 3.19125,101.710052, 4]
];
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: new google.maps.LatLng(3.171368, 101.653404),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
}

var infowindow = new google.maps.InfoWindow;

var marker, i;

for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
        }
    })(marker, i));
}
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAKY4gvLztVr7zaf8q4g9R1YST5HKc0W8&callback=initMap">
</script>

<div data-role="page" id="map_result">
    <div data-role="header" data-position="fixed"><h1>Multiple Marker</h1></div>
    <div data-role="content" style="padding:0;">
        <div id="map"></div>
    </div>
</div>

