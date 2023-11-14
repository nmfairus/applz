@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Maklumat Terperinci Aduan
                </div>
                <div class="float-end">
                    <a href="{{ route('aduanicts.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Kategori Aduan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->kategori_aduan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="jenis_aset" class="col-md-4 col-form-label text-md-end text-start"><strong>Jenis Aset:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->jenis_aset }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tahap Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->tahap_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Lokasi Utama Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->lokasi_utama_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Lokasi Terperinci Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->lokasi_terperinci_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>No Siri / Daftar:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->no_siri }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Pengguna Terakhir:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->pengguna_terakhir }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->nama_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->email_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>No Telefon Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->phone_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Jawatan Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->jawatan_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Perihal Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->perihal_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tarikh Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->tarikh_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tarikh Laporan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->tarikh_laporan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Status Pembaikan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->status_pembaikan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Anggaran Kos (RM):</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->anggaran_kos }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Kos Terdahulu (RM):</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->kos_terdahulu }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Syor / Tindakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->syor_tindakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama Pegawai Aset:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->nama_peg_aset }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Jawatan Pegawai Aset:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->jawatan_peg_aset }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tarikh Tindakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanict->tarikh_tindakan }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Gambar:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                        <img src="{{ Storage::url($aduanict->gambar) }}" width="250" height="350" alt="" class="rounded img-thumbnail">
                            
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection