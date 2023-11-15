@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Aduan ICT
                </div>
                <div class="float-end">
                    <a href="{{ route('aduanicts.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('aduanicts.update', $aduanict->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="kategori_aduan" class="col-md-4 col-form-label text-md-end text-start">Kategori Aduan</label>
                        <div class="col-md-6">
                        <select class="form-select @error('kategori_aduan') is-invalid @enderror" id="kategori_aduan" name="kategori_aduan" value="{{ $aduanict->kategori_aduan }}">
                            <option value="{{ $aduanict->kategori_aduan }}">{{ $aduanict->kategori_aduan }}</option>
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
                        <select class="form-select @error('jenis_aset') is-invalid @enderror" id="jenis_aset" name="jenis_aset" value="{{ $aduanict->jenis_aset }}">
                            <option value="{{ $aduanict->jenis_aset }}">{{ $aduanict->jenis_aset }}</option>
                            @foreach ($jenisasetict as $nama)
                                <option value="{{ $nama }}" @selected(old('nama') == $nama)>
                                    {{ $nama }}
                                </option>
                            @endforeach
                        </select>
                            @if ($errors->has('jenis_aset'))
                                <span class="text-danger">{{ $errors->first('jenis_aset') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahap_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Tahap Kerosakan</label>
                        <div class="col-md-6">
                        <select class="form-select @error('tahap_kerosakan') is-invalid @enderror" id="tahap_kerosakan" name="tahap_kerosakan" value="{{ $aduanict->tahap_kerosakan }}">
                        <option value="{{ $aduanict->tahap_kerosakan }}">{{ $aduanict->tahap_kerosakan }}</option>
                            <option value="Kritikal">Kritikal</option>
                            <option value="Tidak Kritikal">Tidak Kritikal</option>
                        </select>
                            @if ($errors->has('tahap_kerosakan'))
                                <span class="text-danger">{{ $errors->first('tahap_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="lokasi_utama_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Lokasi Utama Kerosakan</label>
                        <div class="col-md-6">
                        <select class="form-select @error('lokasi_utama_kerosakan') is-invalid @enderror" id="lokasi_utama_kerosakan" name="lokasi_utama_kerosakan" value="{{ old('lokasi_utama_kerosakan') }}">
                        <option value="{{ $aduanict->lokasi_utama_kerosakan }}">{{ $aduanict->lokasi_utama_kerosakan }}</option>
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
                          <input type="text" class="form-control @error('lokasi_terperinci_kerosakan') is-invalid @enderror" id="lokasi_terperinci_kerosakan" name="lokasi_terperinci_kerosakan" value="{{ $aduanict->lokasi_terperinci_kerosakan }}">
                            @if ($errors->has('lokasi_terperinci_kerosakan'))
                                <span class="text-danger">{{ $errors->first('lokasi_terperinci_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_siri" class="col-md-4 col-form-label text-md-end text-start">No Siri</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('no_siri') is-invalid @enderror" id="no_siri" name="no_siri" value="{{ $aduanict->no_siri }}">
                            @if ($errors->has('no_siri'))
                                <span class="text-danger">{{ $errors->first('no_siri') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pengguna_terakhir" class="col-md-4 col-form-label text-md-end text-start">Pengguna Terakhir</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('pengguna_terakhir') is-invalid @enderror" id="pengguna_terakhir" name="pengguna_terakhir" value="{{ $aduanict->pengguna_terakhir }}">
                            @if ($errors->has('pengguna_terakhir'))
                                <span class="text-danger">{{ $errors->first('pengguna_terakhir') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_pelapor" class="col-md-4 col-form-label text-md-end text-start">Nama Pelapor</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama_pelapor') is-invalid @enderror" id="nama_pelapor" name="nama_pelapor" value="{{ $aduanict->nama_pelapor }}">
                            @if ($errors->has('nama_pelapor'))
                                <span class="text-danger">{{ $errors->first('nama_pelapor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email_pelapor" class="col-md-4 col-form-label text-md-end text-start">Email Pelapor</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email_pelapor') is-invalid @enderror" id="email_pelapor" name="email_pelapor" value="{{ $aduanict->email_pelapor }}">
                            @if ($errors->has('email_pelapor'))
                                <span class="text-danger">{{ $errors->first('email_pelapor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone_pelapor" class="col-md-4 col-form-label text-md-end text-start">No Telefon Pelapor</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('phone_pelapor') is-invalid @enderror" id="phone_pelapor" name="phone_pelapor" value="{{ $aduanict->phone_pelapor }}">
                            @if ($errors->has('phone_pelapor'))
                                <span class="text-danger">{{ $errors->first('phone_pelapor') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="jawatan_pelapor" class="col-md-4 col-form-label text-md-end text-start">Jawatan Pelapor</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('jawatan_pelapor') is-invalid @enderror" id="jawatan_pelapor" name="jawatan_pelapor" value="{{ $aduanict->jawatan_pelapor }}">
                            @if ($errors->has('jawatan_pelapor'))
                                <span class="text-danger">{{ $errors->first('jawatan_pelapor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="perihal_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Perihal Kerosakan</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('perihal_kerosakan') is-invalid @enderror" id="perihal_kerosakan" name="perihal_kerosakan">{{ $aduanict->perihal_kerosakan }}</textarea>
                            @if ($errors->has('perihal_kerosakan'))
                                <span class="text-danger">{{ $errors->first('perihal_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tarikh_kerosakan" class="col-md-4 col-form-label text-md-end text-start">Tarikh Kerosakan</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('tarikh_kerosakan') is-invalid @enderror" id="tarikh_kerosakan" name="tarikh_kerosakan" value="{{ $aduanict->tarikh_kerosakan }}">
                            @if ($errors->has('tarikh_kerosakan'))
                                <span class="text-danger">{{ $errors->first('tarikh_kerosakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tarikh_laporan" class="col-md-4 col-form-label text-md-end text-start">Tarikh Laporan</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('tarikh_laporan') is-invalid @enderror" id="tarikh_laporan" name="tarikh_laporan" value="{{ $aduanict->tarikh_laporan }}">
                            @if ($errors->has('tarikh_laporan'))
                                <span class="text-danger">{{ $errors->first('tarikh_laporan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="status_pembaikan" class="col-md-4 col-form-label text-md-end text-start">Status Pembaikan</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('status_pembaikan') is-invalid @enderror" id="status_pembaikan" name="status_pembaikan" value="{{ $aduanict->status_pembaikan }}">
                            @if ($errors->has('status_pembaikan'))
                                <span class="text-danger">{{ $errors->first('status_pembaikan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="anggaran_kos" class="col-md-4 col-form-label text-md-end text-start">Anggaran Kos (RM)</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('anggaran_kos') is-invalid @enderror" id="anggaran_kos" name="anggaran_kos" value="{{ $aduanict->anggaran_kos }}">
                            @if ($errors->has('anggaran_kos'))
                                <span class="text-danger">{{ $errors->first('anggaran_kos') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kos_terdahulu" class="col-md-4 col-form-label text-md-end text-start">Kos Terdahulu (RM)</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('kos_terdahulu') is-invalid @enderror" id="kos_terdahulu" name="kos_terdahulu" value="{{ $aduanict->kos_terdahulu }}">
                            @if ($errors->has('kos_terdahulu'))
                                <span class="text-danger">{{ $errors->first('kos_terdahulu') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="syor_tindakan" class="col-md-4 col-form-label text-md-end text-start">Syor / Tindakan</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('syor_tindakan') is-invalid @enderror" id="syor_tindakan" name="syor_tindakan">{{ $aduanict->syor_tindakan }}</textarea>
                            @if ($errors->has('syor_tindakan'))
                                <span class="text-danger">{{ $errors->first('syor_tindakan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_peg_aset" class="col-md-4 col-form-label text-md-end text-start">Nama Pegawai Aset</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama_peg_aset') is-invalid @enderror" id="nama_peg_aset" name="nama_peg_aset" value="{{ Auth::check() ? Auth::user()->name : '' }}">
                            @if ($errors->has('nama_peg_aset'))
                                <span class="text-danger">{{ $errors->first('nama_peg_aset') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jawatan_peg_aset" class="col-md-4 col-form-label text-md-end text-start">Jawatan Pegawai Aset</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('jawatan_peg_aset') is-invalid @enderror" id="jawatan_peg_aset" name="jawatan_peg_aset" value="{{ Auth::check() ? Auth::user()->jawatan.' '.Auth::user()->gred : '' }}">
                            @if ($errors->has('jawatan_peg_aset'))
                                <span class="text-danger">{{ $errors->first('jawatan_peg_aset') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Gambar:</label>
                        <div class="col-md-6" style="line-height: 35px;">
                        <img src="{{ asset('storage/'.$aduanict->gambar) }}" width="50" height="100" alt="" class="rounded img-thumbnail">
                            
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gambar" class="col-md-4 col-form-label text-md-end text-start"></label>
                        <div class="col-md-6">
                          <input type="hidden" name="gambar_lama" value="{{ $aduanict->gambar }}">
                          <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ $aduanict->gambar }}" >
                            @if ($errors->has('gambar'))
                                <span class="text-danger">{{ $errors->first('gambar') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tarikh_tindakan" class="col-md-4 col-form-label text-md-end text-start">Tarikh Tindakan</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('tarikh_tindakan') is-invalid @enderror" id="tarikh_tindakan" name="tarikh_tindakan" value="{{ $aduanict->tarikh_tindakan }}">
                            @if ($errors->has('tarikh_tindakan'))
                                <span class="text-danger">{{ $errors->first('tarikh_tindakan') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection