@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start fw-bold">
                    Maklumat Terperinci Aduan Kerosakan Fizikal (UPPA)
                </div>
                <div class="float-end">
                    <a href="{{ route('aduanuppas.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Kategori Aduan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->kategori_aduan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="jenis_aset" class="col-md-4 col-form-label text-md-end text-start"><strong>Jenis Aset:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->jenis_aset }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tahap Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->tahap_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Lokasi Utama Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->lokasi_utama_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Lokasi Terperinci Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->lokasi_terperinci_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>No Siri / Daftar:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->no_siri }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Pengguna Terakhir:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->pengguna_terakhir }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->nama_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->email_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>No Telefon Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->phone_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Jawatan Pelapor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->jawatan_pelapor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Perihal Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->perihal_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tarikh Kerosakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->tarikh_kerosakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tarikh Laporan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->tarikh_laporan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Status Pembaikan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->status_pembaikan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Anggaran Kos (RM):</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->anggaran_kos }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Kos Terdahulu (RM):</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->kos_terdahulu }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Syor / Tindakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->syor_tindakan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama Pegawai Aset:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->nama_peg_aset }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Jawatan Pegawai Aset:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->jawatan_peg_aset }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Tarikh Tindakan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $aduanuppa->tarikh_tindakan }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Gambar:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                        <img src="{{ asset('storage/'.$aduanuppa->gambar) }}" width="250" height="350" alt="" class="rounded img-thumbnail">
                            
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection