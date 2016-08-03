

      function initMap() {
        var myLatLng = {lat: 50.833942, lng: -0.779508};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: myLatLng,
          mapTypeControl:false,
          scaleControl:false,
          panControl:false,
          draggable: false, 
          zoomControl: true,
          scrollwheel: false
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Click to zoom!'
        });


        map.addListener('center_changed', function() {
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
          window.setTimeout(function() {
            map.panTo(marker.getPosition());
          }, 3000);
        });

        marker.addListener('click', function() {
          map.setZoom(14);
          map.setCenter(marker.getPosition());
        });
      }
