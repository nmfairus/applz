@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Senarai Aduan ICT</div>
    <div class="card-body">
        @can('create-aduanict')
            <a href="{{ route('aduanicts.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Cipta Aduan ICT Baru</a>
            <a href="{{ route('aduanicts.report') }}" class="btn btn-primary btn-sm my-2"><i class="bi bi-plus-circle"></i> Laporan</a>
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
                @forelse ($aduanicts as $aduanict)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $aduanict->nama_pelapor }}</td>
                    <td>{{ $aduanict->jenis_aset }}</td>
                    <td>{{ $aduanict->lokasi_utama_kerosakan }}</td>
                    <td>{{ $aduanict->tarikh_laporan }}</td>
                    <td>{{ $aduanict->status_pembaikan }}</td>
                    <td>
                        <form action="{{ route('aduanicts.destroy', $aduanict->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('aduanicts.show', $aduanict->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-aduanict')
                                <a href="{{ route('aduanicts.edit', $aduanict->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-aduanict')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this aduanict?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan

                            @can('edit-aduanict')
                                <a href="{{ route('aduanicts.print', $aduanict->id) }}" class="btn btn-light btn-sm" target="_blank"><i class="bi bi-printer"></i> Cetak</a>
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

        {{ $aduanicts->links() }}

    </div>
</div>
@endsection