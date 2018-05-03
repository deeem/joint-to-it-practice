@extends('layouts.admin')

@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Map</a>
  </li>
  <li class="breadcrumb-item active">Map</li>
</ol>

<div class="row">
<div class="map" id="map" style="height: 500px; width: 100%;"></div>
</div>

<script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: {lat: 50.4297351, lng: 30.4753496},
    });

    map.addListener('click', function(e) {
      placeMarkerAndPanTo(e.latLng, map);
    });

    getMarkers();
  }

  function placeMarkerAndPanTo(latLng, map) {
    var marker = new google.maps.Marker({
      position: latLng,
      map: map
    });
    map.panTo(latLng);

    $.ajax({
      url: '/store-marker',
      data: {
        lat: latLng.lat(),
        lng: latLng.lng()
      }
    }).done(function (msg) {
      console.log("Marker saved");
    });
  }

  function getMarkers() {
    $.ajax({
      url: '/get-markers',
      dataType: 'json',
    }).done(function (data) {
      //
    });

  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key={{ env('MAP_API_KEY') }}&callback=initMap">
</script>

@endsection
