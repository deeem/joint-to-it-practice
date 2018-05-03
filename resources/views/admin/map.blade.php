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
    var foo = {lat: 50.4297351, lng: 30.4753496};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: foo,
      mapTypeId: 'hybrid'
    });
    var marker = new google.maps.Marker({
      position: foo,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key={{ config('map.api.key') }}&callback=initMap">
</script>

@endsection
