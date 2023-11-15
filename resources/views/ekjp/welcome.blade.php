@extends('layouts.app')
@section('title', 'Laman Utama - eKJP')
@section('content')

<div class="container-fluid mt-3">
  <h3>Carousel Example</h3>
  <p>The following example shows how to create a basic carousel with indicators and controls.</p>
</div>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/te.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h2 class="display-1">eKJP</h2>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-warning" type="button">Senarai Kursus</button>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('/img/tt.jpg') }}" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h2 class="display-1">eKJP</h2>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-warning" type="button">Senarai Kursus</button>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('/img/tm.jpg') }}" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h2 class="display-1">eKJP</h2>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-warning" type="button">Senarai Kursus</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

@endsection
