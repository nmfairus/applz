@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4">{{ __('Hantar Aduan Kerosakan Peralatan ICT') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('publicaduanict.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="kategori_aduan" class="col-md-4 col-form-label text-md-end text-start">Kategori Aduan</label>
                        <div class="col-md-6">
                        <select class="form-select @error('kategori_aduan') is-invalid @enderror" id="kategori_aduan" name="kategori_aduan" value="{{ old('kategori_aduan') }}">
                            <option value="" selected>Sila Pilih</option>
                            @foreach ($kategoriaduanict as $nama)
                                <option value="{{ $nama }}" @selected(old('nama') == $nama)>
                                    {{ $nama }}
                                </option>
                            @endforeach
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                            @if ($errors->has('kategori_aduan'))
                                <span class="text-danger">{{ $errors->first('kategori_aduan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jenis_aset" class="col-md-4 col-form-label text-md-end text-start">Jenis Aset</label>
                        <div class="col-md-6">
                        <select class="form-select @error('jenis_aset') is-invalid @enderror" id="jenis_aset" name="jenis_aset" value="{{ old('jenis_aset') }}" >
                            <option value="" selected>Sila Pilih</option>
                            @foreach ($jenisaset as $nama)
                                <option value="{{ $nama }}" @selected(old('nama') == $nama)>
                                    {{ $nama }}
                                </option>
                            @endforeach
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                            @if ($errors->has('jenis_aset'))
                                <span class="text-danger">{{ $errors->first('jenis_aset') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahap_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Tahap Kerosakan</label>
                        <div class="col-md-6">
                        <select class="form-select @error('tahap_kerosakan') is-invalid @enderror" id="tahap_kerosakan" name="tahap_kerosakan" value="{{ old('tahap_kerosakan') }}" >
                            <option value="" selected>Sila Pilih</option>
                            <option value="Kritikal">Kritikal</option>
                            <option value="Tidak Kritikal">Tidak Kritikal</option>
                        </select>
                            @if ($errors->has('tahap_kerosakan'))
                                <span class="text-danger">{{ $errors->first('tahap_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="lokasi_utama_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Lokasi Kerosakan</label>
                        <div class="col-md-6">
                        <select class="form-select @error('lokasi_utama_kerosakan') is-invalid @enderror" id="lokasi_utama_kerosakan" name="lokasi_utama_kerosakan" value="{{ old('lokasi_utama_kerosakan') }}" >
                            <option value="" selected>Sila Pilih</option>
                            @foreach ($lokasiutamaict as $nama)
                                <option value="{{ $nama }}" @selected(old('nama') == $nama)>
                                    {{ $nama }}
                                </option>
                            @endforeach
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                            @if ($errors->has('lokasi_utama_kerosakan'))
                                <span class="text-danger">{{ $errors->first('lokasi_utama_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="lokasi_terperinci_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Lokasi Terperinci Kerosakan</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('lokasi_terperinci_kerosakan') is-invalid @enderror" id="lokasi_terperinci_kerosakan" name="lokasi_terperinci_kerosakan" value="{{ old('lokasi_terperinci_kerosakan') }}" >
                            @if ($errors->has('lokasi_terperinci_kerosakan'))
                                <span class="text-danger">{{ $errors->first('lokasi_terperinci_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_pelapor" class="col-md-4 col-form-label text-md-end text-start">Nama Pelapor</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama_pelapor') is-invalid @enderror" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" >
                            @if ($errors->has('nama_pelapor'))
                                <span class="text-danger">{{ $errors->first('nama_pelapor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jawatan_pelapor" class="col-md-4 col-form-label text-md-end text-start">Jawatan Pelapor</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('jawatan_pelapor') is-invalid @enderror" id="jawatan_pelapor" name="jawatan_pelapor" value="{{ old('jawatan_pelapor') }}" >
                            @if ($errors->has('jawatan_pelapor'))
                                <span class="text-danger">{{ $errors->first('jawatan_pelapor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email_pelapor" class="col-md-4 col-form-label text-md-end text-start">Email Pelapor</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email_pelapor') is-invalid @enderror" id="email_pelapor" name="email_pelapor" value="{{ old('email_pelapor') }}" >
                            @if ($errors->has('email_pelapor'))
                                <span class="text-danger">{{ $errors->first('email_pelapor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone_pelapor" class="col-md-4 col-form-label text-md-end text-start">No. Telefon Pelapor</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('phone_pelapor') is-invalid @enderror" id="phone_pelapor" name="phone_pelapor" value="{{ old('phone_pelapor') }}" >
                            @if ($errors->has('phone_pelapor'))
                                <span class="text-danger">{{ $errors->first('phone_pelapor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="perihal_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Perihal Kerosakan</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('perihal_kerosakan') is-invalid @enderror" id="perihal_kerosakan" name="perihal_kerosakan" >{{ old('perihal_kerosakan') }}</textarea>
                            @if ($errors->has('perihal_kerosakan'))
                                <span class="text-danger">{{ $errors->first('perihal_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gambar" class="col-md-4 col-form-label text-md-end text-start">Gambar</label>
                        <div class="col-md-6">
                          <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar') }}" >
                            @if ($errors->has('gambar'))
                                <span class="text-danger">{{ $errors->first('gambar') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tarikh_laporan" class="col-md-4 col-form-label text-md-end text-start">Tarikh Laporan</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('tarikh_laporan') is-invalid @enderror" id="tarikh_laporan" name="tarikh_laporan" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" >
                            @if ($errors->has('tarikh_laporan'))
                                <span class="text-danger">{{ $errors->first('tarikh_laporan') }}</span>
                            @endif
                        </div>
                    </div>

                    <input type="hidden" id="status_pembaikan" name="status_pembaikan" value="Baru">
                                      
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Hantar Laporan">
                    </div>
                    
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection