@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header fw-bold">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat Datang') }} <span class="fw-bold">{{ Auth::user()->name }}</span>

                    <p>Halaman utama sistem E-Aduan.</p>

                    @canany(['sistem-ekjp'])
                        <a class="btn btn-primary" href="{{ route('admin.index') }}">
                            <i class="bi bi-person-fill-gear"></i> Sistem eKJP</a>
                    @endcanany

                    @canany(['create-role', 'edit-role', 'delete-role'])
                        <a class="btn btn-primary" href="{{ route('roles.index') }}">
                            <i class="bi bi-person-fill-gear"></i> Manage Roles</a>
                    @endcanany
                    @canany(['create-user', 'edit-user', 'delete-user'])
                        <a class="btn btn-success" href="{{ route('users.index') }}">
                            <i class="bi bi-people"></i> Manage Users</a>
                    @endcanany
                    @canany(['create-product', 'edit-product', 'delete-product'])
                        <a class="btn btn-warning" href="{{ route('products.index') }}">
                            <i class="bi bi-bag"></i> Manage Products</a>
                    @endcanany
                    @canany(['create-aduanict', 'edit-aduanict', 'delete-aduanict'])
                        <a class="btn btn-warning" href="{{ route('aduanicts.index') }}">
                            <i class="bi bi-bag"></i> Manage Aduan ICT</a>
                    @endcanany
                    @canany(['create-aduanuppa', 'edit-aduanuppa', 'delete-aduanuppa'])
                        <a class="btn btn-warning" href="{{ route('aduanuppas.index') }}">
                            <i class="bi bi-bag"></i> Manage Aduan UPPA</a>
                    @endcanany
                    <p>&nbsp;</p>

                    @canany(['create-aduanict', 'edit-aduanict', 'delete-aduanict'])
                    <hr>
                    <p>Tambah Jadual (ICT)</p>
                        <a class="btn btn-dark" href="{{ route('jenisaseticts.index') }}">
                            <i class="bi bi-bag"></i> Manage Jenis Aset</a>
                        <a class="btn btn-dark" href="{{ route('kategoriaduanicts.index') }}">
                            <i class="bi bi-bag"></i> Manage Kategori Aduan</a>
                        <a class="btn btn-dark" href="{{ route('lokasiutamaicts.index') }}">
                            <i class="bi bi-bag"></i> Lokasi Utama ICT</a>
                        <a class="btn btn-dark" href="{{ route('jawatans.index') }}">
                            <i class="bi bi-bag"></i> Jawatan</a>
                    @endcanany

                    @canany(['create-aduanuppa', 'edit-aduanuppa', 'delete-aduanuppa'])
                    <hr>
                    <p>Tambah Jadual (UPPA)</p>
                        <a class="btn btn-dark" href="{{ route('jenisasetuppas.index') }}">
                            <i class="bi bi-bag"></i> Manage Jenis Aset</a>
                        <a class="btn btn-dark" href="{{ route('kategoriaduanuppas.index') }}">
                            <i class="bi bi-bag"></i> Manage Kategori Aduan</a>
                        <a class="btn btn-dark" href="{{ route('lokasiutamauppas.index') }}">
                            <i class="bi bi-bag"></i> Lokasi Utama UPPA</a>
                    @endcanany

                    @canany(['view-staf'])
                    <hr>
                    <p>User Menu</p>
                        <a class="btn btn-info" href="{{ route('aduanicts.create') }}">
                            <i class="bi bi-bag"></i> Hantar Aduan ICT</a>
                        <a class="btn btn-info" href="{{ route('aduanuppas.create') }}">
                            <i class="bi bi-bag"></i> Hantar Aduan UPPA</a>
                    @endcanany
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
