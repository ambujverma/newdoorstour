(function ($) {
  "use strict";

  var map;
  var marker = [];
  var styles;

  // Property map marker position
  var propLat = "28.678108";
  var propLng = "77.307465";

  var options = {
    zoom: 14,
    mapTypeId: "Styled",
    panControl: false,
    zoomControl: true,
    mapTypeControl: true,
    scaleControl: false,
    streetViewControl: true,
    overviewMapControl: false,
    scrollwheel: false,
    zoomControlOptions: {
      position: google.maps.ControlPosition.RIGHT_BOTTOM,
    },
    fullscreenControl: true,
  };

  styles = [
    {
      featureType: "water",
      elementType: "geometry",
      stylers: [{ color: "#e9e9e9" }, { lightness: 17 }],
    },
    {
      featureType: "landscape",
      elementType: "geometry",
      stylers: [{ color: "#f5f5f5" }, { lightness: 20 }],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.fill",
      stylers: [{ color: "#ffffff" }, { lightness: 17 }],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.stroke",
      stylers: [{ color: "#ffffff" }, { lightness: 29 }, { weight: 0.2 }],
    },
    {
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [{ color: "#ffffff" }, { lightness: 18 }],
    },
    {
      featureType: "road.local",
      elementType: "geometry",
      stylers: [{ color: "#ffffff" }, { lightness: 16 }],
    },
    {
      featureType: "poi",
      elementType: "geometry",
      stylers: [{ color: "#f5f5f5" }, { lightness: 21 }],
    },
    {
      featureType: "poi.park",
      elementType: "geometry",
      stylers: [{ color: "#dedede" }, { lightness: 21 }],
    },
    {
      elementType: "labels.text.stroke",
      stylers: [{ visibility: "on" }, { color: "#ffffff" }, { lightness: 16 }],
    },
    {
      elementType: "labels.text.fill",
      stylers: [{ saturation: 36 }, { color: "#333333" }, { lightness: 40 }],
    },
    { elementType: "labels.icon", stylers: [{ visibility: "off" }] },
    {
      featureType: "transit",
      elementType: "geometry",
      stylers: [{ color: "#f2f2f2" }, { lightness: 19 }],
    },
    {
      featureType: "administrative",
      elementType: "geometry.fill",
      stylers: [{ color: "#fefefe" }, { lightness: 20 }],
    },
    {
      featureType: "administrative",
      elementType: "geometry.stroke",
      stylers: [{ color: "#fefefe" }, { lightness: 17 }, { weight: 1.2 }],
    },
  ];

  function CustomMarker(latlng, map, classname) {
    this.latlng_ = latlng;
    this.classname = classname;

    this.setMap(map);
  }

  CustomMarker.prototype = new google.maps.OverlayView();

  CustomMarker.prototype.draw = function () {
    var me = this;
    var div = this.div_;

    if (!div) {
      div = this.div_ = document.createElement("div");
      div.classList.add(this.classname);

      var panes = this.getPanes();
      panes.overlayImage.appendChild(div);
    }

    var point = this.getProjection().fromLatLngToDivPixel(this.latlng_);

    if (point) {
      div.style.left = point.x + "px";
      div.style.top = point.y + "px";
    }
  };

  function addContactMarker(propLat, propLng, map) {
    var latlng = new google.maps.LatLng(propLat, propLng);
    marker = new CustomMarker(latlng, map, "pxp-single-marker");
  }

  //   setTimeout(function () {
  //     if ($("#").length > 0) {
  //       map = new google.maps.Map(document.getElementById("#"), options);
  //       var styledMapType = new google.maps.StyledMapType(styles, {
  //         name: "Styled",
  //       });
  //       var center = new google.maps.LatLng(propLat, propLng);

  //       map.mapTypes.set("Styled", styledMapType);
  //       map.setCenter(center);
  //       map.setZoom(15);

  //       addContactMarker(propLat, propLng, map);

  //       google.maps.event.trigger(map, "resize");
  //     }
  //   }, 300);
})(jQuery);
