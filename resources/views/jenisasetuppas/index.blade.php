@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Jenis Aset UPPA List</div>
    <div class="card-body">
        @can('create-aduanuppa')
            <a href="{{ route('jenisasetuppas.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Tambah Jenis Aset</a>
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
                @forelse ($jenisasetuppas as $jenisasetuppa)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $jenisasetuppa->nama }}</td>
                    <td>
                        <form action="{{ route('jenisasetuppas.destroy', $jenisasetuppa->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <!-- <a href="{{ route('jenisasetuppas.show', $jenisasetuppa->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a> -->

                            @can('edit-aduanuppa')
                                <a href="{{ route('jenisasetuppas.edit', $jenisasetuppa->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-aduanuppa')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this jenisasetuppa?');"><i class="bi bi-trash"></i> Delete</button>
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

        {{ $jenisasetuppas->links() }}

    </div>
</div>
@endsection