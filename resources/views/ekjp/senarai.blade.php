@extends('layouts.template')

@section('title', 'Senarai Kursus - eKJP')

@section('style')
<style>
    .table-hover tr {
    cursor: pointer;
}
    </style>
@endsection

@section('content')

<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">eKJP ADTEC Kulim</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="{{route('ekjp')}}">Home</a>
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{route('ekjp.senarai')}}">Senarai Kursus</a>
        </nav>
    </div>

</header>

<main class="px-3">
    <img src="{{ asset('logo.png') }}" class="img-rounded" alt="Cinque Terre" width="152" height="118">
    <h1>Kursus Jangka Pendek yang Ditawarkan ADTEC Kulim</h1>
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
<hr>
<table id="example" class="text-start table-hover table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>KURSUS</th>
            <th>BIDANG</th>
            <th>TEMPOH</th>
            <th>YURAN</th>
            <th>TARIKH</th>
            <th>CATATAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($viewData["senarai"] as $senarai)
        <tr>
            <td>{{ $senarai["id"] }}</td>
            <td>{{ $senarai["kursus"] }}</td>
            <td>{{ $senarai["bidang"] }}</td>
            <td>{{ $senarai["tempoh"] }}</td>
            <td>{{ $senarai["yuran"] }}</td>
            <td>{{ $senarai["tarikh"] }}</td>
            <td>{!! nl2br($senarai["catatan"]) !!}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>KURSUS</th>
            <th>BIDANG</th>
            <th>TEMPOH</th>
            <th>YURAN</th>
            <th>TARIKH</th>
            <th>CATATAN</th>
        </tr>
    </tfoot>
</table>

<!-- Modal -->
<div class="modal fade" data-bs-theme="dark" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <pre class="text-start" id="kandungan-kursus"></pre>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <form method="POST" action="" id="formMohon">
                    @csrf
                    <div class="input-group mb-3 pull-left">
                        <span class="input-group-text" id="addon-wrapping">No. Kad Pengenalan</span>
                        <input type="text" name="noic" class="form-control" placeholder="Dalam format xxxxxxxxxxxx" aria-label="NoIC">
                        <button type="submit" class="btn btn-primary">Mohon</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
let table = new DataTable('#example');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});

table.on('click', 'tbody tr', function(e) {
    let senarai = table.row(this).data();
    $.get('/apps/ekjp/kursus/' + senarai[0], function(result) {
        $('#formMohon').attr('action', 'mohon/' + result.id);
        $("#exampleModalLabel").text(result.kursus);
        $("#kandungan-kursus").html(result.kandungan);
        const myModal = new bootstrap.Modal('#myModal', {
            keyboard: true
        });
        myModal.show();
    })
});
</script>
@endsection
