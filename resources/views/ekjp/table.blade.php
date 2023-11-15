@extends('layouts.template')

@section('title', 'Senarai Kursus - eKJP')

@section('style')

@endsection

@section('content')

<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">eKJP ADTEC Kulim</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="/ekjp">Home</a>
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="/ekjp/senarai">Senarai Kursus</a>
        </nav>
    </div>
</header>

<main class="px-3">
    <img src="{{ asset('logo.png') }}" class="img-rounded" alt="Cinque Terre" width="152" height="118">
    <h1>Kursus Jangka Pendek yang Ditawarkan ADTEC Kulim</h1>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="kandungan-kursus" class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
let table = new DataTable('#example');

table.on('click', 'tbody tr', function() {
    let data = table.row(this).data();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = {
        id: text(data[1]),
    };
    var type = "POST";
    var ajaxurl = 'todo';
    $.ajax({
        type: type,
        url: ajaxurl,
        data: formData,
        dataType: 'json',
        success: function(data) {
            $("#exampleModalLabel").text(data[1]);
            $("#kandungan-kursus").text(data[1]);
            const myModal = new bootstrap.Modal('#myModal', {
                keyboard: true
            });
            myModal.show();
            //alert('You clicked on ' + data[0] + "'s row");
        },
        error: function(data) {
            console.log(data);
        }
    });

});
</script>
@endsection
