
var locations = [

  //['Colonial 4603 W Colonial Dr, Orlando, FL 32808-8158', 25.620750, -80.362559, 6],
  ['<center><h3>Moss Park Location </h3></center> <p>9315 N Shore Golf Club Blvd, Orlando, FL 32832</p> <center><img src="img/location5.jpg" height="100" width="100"></center>', 28.403156, -81.208616, 5],
  ['<center><h3>UCF Location</h3></center> <p>4000 Central Florida Blvd, Orlando, FL 32816 </p> <p>Telephone: 407-274-96-85</p><center><img src="img/location4.png" height="100" width="100"></center>', 28.602427, -81.200060, 4],
  ['<center><h3>Lee Vista Location</h3></center>  <p>5903 Lee Vista Blvd, Orlando, FL 32822 </p> <p>Telephone: 407-621-12-22</p> <center><img src="img/location3.jpg" height="100" width="100"></center>', 28.467788, -81.304308, 3],
  ['<center><h3>Alafaya Location</h3></center> <p>12024 Royal Wulff Lane Orlando, FL 32817</p> <p>Telephone: 407-446-12-93</p> <center><img src="img/location2.jpg" height="100" width="100"></center>', 28.564100, -81.211400, 2],
  ['<center><h3>Curry Ford Location</h3></center> <p>4207 Curry Ford Rd, Orlando, FL 32806-2714</p> <p>Telephone: 407-423-31-43</p> <center><img src="img/location1.jpg" height="100" width="100"></center>', 28.523640, -81.34561, 1]

];

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 10,

  center: new google.maps.LatLng(28.538336, -81.379234), //Changed address to orlando

  mapTypeId: google.maps.MapTypeId.ROADMAP

});



var infowindow = new google.maps.InfoWindow();

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
