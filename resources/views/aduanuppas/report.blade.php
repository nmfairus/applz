@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header fw-bold">Laporan Aduan Kerosakan Fizikal (UPPA)</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush