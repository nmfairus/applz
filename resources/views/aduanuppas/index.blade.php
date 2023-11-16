@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header fw-bold">Senarai Aduan Kerosakan Fizikal (UPPA)</div>
    <div class="card-body">
        @can('create-aduanuppa')
            <a href="{{ route('aduanuppas.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Cipta Aduan UPPA Baru</a>
            <a href="{{ route('aduanuppas.report') }}" class="btn btn-primary btn-sm my-2"><i class="bi bi-plus-circle"></i> Laporan</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Pelapor</th>
                <th scope="col">Jenis Aset</th>
                <th scope="col">Lokasi Utama</th>
                <th scope="col">Tarikh</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($aduanuppas as $aduanuppa)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $aduanuppa->nama_pelapor }}</td>
                    <td>{{ $aduanuppa->jenis_aset }}</td>
                    <td>{{ $aduanuppa->lokasi_utama_kerosakan }}</td>
                    <td>{{ $aduanuppa->tarikh_laporan }}</td>
                    <td>{{ $aduanuppa->status_pembaikan }}</td>
                    <td>
                        <form action="{{ route('aduanuppas.destroy', $aduanuppa->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('aduanuppas.show', $aduanuppa->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Papar</a>

                            @can('edit-aduanuppa')
                                <a href="{{ route('aduanuppas.edit', $aduanuppa->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Kemaskini</a>
                            @endcan

                            @can('delete-aduanuppa')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this aduanuppa?');"><i class="bi bi-trash"></i> Padam</button>
                            @endcan

                            @can('edit-aduanuppa')
                                <a href="{{ route('aduanuppas.print', $aduanuppa->id) }}" class="btn btn-light btn-sm" target="_blank"><i class="bi bi-printer"></i> Cetak</a>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>Tiada Aduan Dijumpai!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $aduanuppas->links() }}

    </div>
</div>
@endsection