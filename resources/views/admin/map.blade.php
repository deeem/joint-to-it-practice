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

@if($markers)
<h3>Saved markers</h3>
<table class="table table-dark">
  <thead>
    <tr>
      <th>lat</th>
      <th>lng</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($markers as $marker)
    <tr>
      <td>{{ $marker->lat }}</td>
      <td>{{ $marker->lng }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endif

<script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: {lat: 50.4297351, lng: 30.4753496},
    });

    map.addListener('click', function(e) {
      placeMarkerAndPanTo(e.latLng, map);
    });

    getMarkers(map);
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
    });
  }

  function getMarkers(map) {
    $.ajax({
      url: '/get-markers',
      dataType: 'json',
    }).done(function (data) {
      setMarkers(data, map);
    });
  }

  function setMarkers(data, map) {
    $.each(data, function(index, value) {
      new google.maps.Marker({
        position: {lat: +value.lat, lng: +value.lng},
        map: map,
        title: 'Hello World!'
      });
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key={{ env('MAP_API_KEY') }}&callback=initMap">
</script>

@endsection
