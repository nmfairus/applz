@extends('layouts.template')

@section('title', 'Mohon Kursus - eKJP')

@section('style')

@endsection

@section('content')
<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">eKJP ADTEC Kulim</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="{{route('ekjp')}}">Home</a>
            <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="{{route('ekjp.senarai')}}">Senarai Kursus</a>
        </nav>
    </div>

</header>

<main class="px-3">
    <img src="{{ asset('logo.png') }}" class="img-rounded" alt="Cinque Terre" width="152" height="118">
    <h1>Borang Permohonan Kursus Jangka Pendek</h1>
    <!-- Way 1: Display All Error Messages -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul class="text-start">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</main>
<div class="b-example-divider"></div>

<div class="container px-4 py-5 text-white">
  <h2 class="pb-2 border-bottom">{{$mohonData['kursus']}} </h2>

  <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
    <div class="col d-flex flex-column align-items-start gap-2">
      <h2 class="fw-bold text-white">Kandungan Kursus:</h2>
      <pre class="text-start text-white">{{$mohonData['kandungan']}}</pre>
    </div>

    <div class="col">
      <div class="row row-cols-1 row-cols-sm-2 g-4">
        <div class="col d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
            BIDANG
          </div>
          <h4 class="fw-semibold mb-0">{{$mohonData['bidang']}} </h4>
        </div>

        <div class="col d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
            TEMPOH
          </div>
          <h4 class="fw-semibold mb-0">{{$mohonData['tempoh']}} Hari</h4>
        </div>

        <div class="col d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
            YURAN
          </div>
          <h4 class="fw-semibold mb-0">RM{{$mohonData['yuran']}} </h4>
        </div>

        <div class="col d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
            TARIKH
          </div>
          <h4 class="fw-semibold mb-0">{{$mohonData['tarikh']}}</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<hr>
<h3>Maklumat Peribadi</h3>
<form class="gelap text-start text-white" method="post" action="{{route('ekjp.mohonform')}}">
    @csrf
    <div class="row g-5">
        <div class="col-8">
            <label for="exampleInputNama" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Penuh"
                value="{{session('mohonData.nama')}}{{ old('nama') }}" {{session('mohonData.readonly')}}{{ old('readonly') }}>
        </div>
        <div class="col-4">
            <label for="inputPhone" class="form-label">No. Kad Pengenalan</label>
            <input name="noic" type="text" class="form-control" id="noic" placeholder="No. Kad Pengenalan"
                value="{{session('mohonData.noic')}}{{ old('noic') }}" {{session('mohonData.readonly')}}>
        </div>
    </div>
    <br>
    <div class="row g-5">
        <div class="col-6">
            <label for="exampleInputNama" class="form-label">Email</label>
            <input name="email" type="text" class="form-control" placeholder="Email"
                value="{{session('mohonData.email')}}{{ old('email') }}">
        </div>
        <div class="col-6">
            <label for="inputPhone" class="form-label">No. Telefon</label>
            <input name="telefon" type="text" class="form-control" id="noic" placeholder="No. Telefon"
                value="{{session('mohonData.telefon')}}{{ old('telefon') }}">
        </div>
    </div>
    <input type="hidden" id="kursus_id" name="kursus_id" value="{{$mohonData['kursus_id']}}">

    <hr>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection

@section('script')

@endsection
