@extends('layouts.admin')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">My Dashboard</li>
</ol>

@include('partials.admin.iconcards')
@include('partials.admin.areachartexample')
@include('partials.admin.cardexample')
@include('partials.admin.table')

@endsection
