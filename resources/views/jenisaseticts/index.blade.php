@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Jenis Aset ICT List</div>
    <div class="card-body">
        @can('create-aduanict')
            <a href="{{ route('jenisaseticts.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Tambah Jenis Aset</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jenisaseticts as $jenisasetict)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $jenisasetict->nama }}</td>
                    <td>
                        <form action="{{ route('jenisaseticts.destroy', $jenisasetict->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <!-- <a href="{{ route('jenisaseticts.show', $jenisasetict->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a> -->

                            @can('edit-aduanict')
                                <a href="{{ route('jenisaseticts.edit', $jenisasetict->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-aduanict')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this jenisasetict?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="3">
                        <span class="text-danger">
                            <strong>Tiada Jenis Aset Dijumpai!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $jenisaseticts->links() }}

    </div>
</div>
@endsection