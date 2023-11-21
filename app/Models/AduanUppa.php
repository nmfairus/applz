<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanUppa extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_aduan',
        'jenis_aset',
        'tahap_kerosakan',
        'lokasi_utama_kerosakan',
        'lokasi_terperinci_kerosakan',
        'no_siri',
        'pengguna_terakhir',
        'nama_pelapor',
        'email_pelapor',
        'phone_pelapor',
        'jawatan_pelapor',
        'perihal_kerosakan',
        'tarikh_kerosakan',
        'tarikh_laporan',
        'gambar',
        'status_pembaikan',
        'anggaran_kos',
        'kos_terdahulu',
        'syor_tindakan',
        'nama_peg_aset',
        'jawatan_peg_aset',
        'tarikh_tindakan'
    ];
}
