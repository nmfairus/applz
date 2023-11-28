@extends('layouts.template')

@section('title', 'Laman Utama - eKJP')

@section('style')

@endsection

@section('content')

<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">eKJP ADTEC Kulim</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="/ekjp">Home</a>
            <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="/ekjp/senarai">Senarai Kursus</a>
        </nav>
    </div>
</header>

<main class="px-3">
    @if (session('mohonData'))
    <div class="alert alert-success">
        <p>{{ session('mohonData.message') }}</p>
        <p>{{ session('mohonData.user.nama') }}</p>
    </div>
    @endif
    <img src="{{ asset('logo.png') }}" class="img-rounded" alt="Cinque Terre" width="152" height="118">
    <h1>Kursus Jangka Pendek yang Ditawarkan ADTEC Kulim</h1>
    <p class="lead">Boleh rujuk kepada senarai kursus untuk maklumat lanjut.</p>
    <p class="lead">
        <a href="/ekjp/senarai" class="btn btn-lg btn-light fw-bold border-white bg-white">Senarai Kursus</a>
    </p>

</main>
@endsection
