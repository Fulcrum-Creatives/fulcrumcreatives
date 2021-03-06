window.gMap = {
  mapLoad: function() {
    var map_address = $('#footer-map-canvas').attr('data-address'),
        geocoder = new google.maps.Geocoder(),
        iconPath = '/wp-content/images/pin.png';
      geocoder.geocode({
          'address': map_address
      }, function (results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
              var latlng = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()),
                  myOptions = {
                      zoom: 14,
                      center: latlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP,
                      panControl: false,
                      streetViewControl: false,
                      scrollwheel: false,
                      zoomControlOptions: {
                          style: google.maps.ZoomControlStyle.SMALL
                      },
                      styles: [{
                          stylers: [{
                              saturation: -64
                          }, {
                              lightness: 50
                          }, {
                              gamma: 0.51
                          }]
                      }, {
                          stylers: [
                          //{ visibility: 'simplified' },
                              {
                                  hue: '#00c3ff'
                              }, {
                                  saturation: 15
                              }, {
                                  lightness: 10
                              }, {
                                  gamma: 0.65
                              }]
                      }, {
                          featureType: "road",
                          stylers: [{
                              saturation: -55
                          }, {
                              gamma: 1
                          }, {
                              lightness: 12
                          }, {
                              color: "#ffffff"
                          }]
                      }, {
                          featureType: "landscape",
                          stylers: [{
                              "color": "#151515"
                          }]
                      }, {
                          featureType: "geometry",
                          stylers: [{
                              hue: '#00b2ff'
                          }, {
                              saturation: -15
                          }, {
                              lightness: -10
                          }, {
                              gamma: 0.6
                          }]
                      }, {
                          stylers: [{
                              saturation: -45
                          }, {
                              lightness: -40
                          }, {
                              gamma: 0.7
                          }]
                      }, {
                          "elementType": "labels.text.fill",
                          "stylers": [{
                              "color": "#ffffff"
                          }]
                      }, {
                          "elementType": "labels.text.stroke",
                          "stylers": [{
                              "color": "#000000"
                          }]
                      } ]
                  },
              directions_url = 'http://maps.google.com/?f=d&q=' + map_address;
              map = new google.maps.Map(document.getElementById("footer-map-canvas"), myOptions);
              marker = new google.maps.Marker({  map: map, position: latlng, icon: iconPath });
              info_content = '<p style="font-weight:bold">' + map_address + '</p><p>(Click logo for directions)</p>';
              infowindow = new google.maps.InfoWindow({
                content: "<div class='mapbox'>" + info_content + "</div>",
                position: latlng
              });
              window_open = false;
              google.maps.event.addListener(marker, 'mouseover', function () {
                  if (window_open) {
                      return;
                  }
                  window_open = true;
                  infowindow.open(map, this);
              });
              google.maps.event.addListener(marker, 'click', function () {
                  window.open(directions_url);
              });

          } else {
            alert("Geocode was not successful for the following reason: " + status);
          }
      });
  },
};
window.onload = function() { window.gMap.mapLoad(); };