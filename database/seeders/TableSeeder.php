<?php

namespace Database\Seeders;

use App\Models\Jawatan;
use App\Models\JenisAsetIct;
use App\Models\KategoriAduanIct;
use App\Models\LokasiUtamaIct;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori_aduan_icts = [
            'Perkakasan',
            'Perisian',
            'Rangkaian',
            'Sistem Maklumat',
            'Internet'
         ];

         $jenis_aset_icts = [
            'Komputer Desktop',
            'Komputer Riba',
            'Pencetak',
            'Pengimbas',
            'Email',
            'Capaian Internet',
            'Perisian Aplikasi'
         ];

         $lokasi_utama_icts = [
            'Bengunan Pentadbiran',
            'Bangunan Pusat Sumber',
            'Bangunan Elektronik',
            'Bangunan Mekatronik',
            'Bangunan Telekomunikasi',
            'Bangunan Mekanikal',
            'Dewan Kuliah Utama',
            'Dewan Seri Mahang'
         ];

         $jawatans = [
            'PLV',
            'PPLV',
            'PPP',
            'PPTM',
            'PPT',
            'PT',
            'PP'
         ];
 
          // Looping and Inserting Array's Permissions into Permission Table
         foreach ($kategori_aduan_icts as $kategori_aduan_ict) {
            KategoriAduanIct::create(['nama' => $kategori_aduan_ict]);
          }

          foreach ($jenis_aset_icts as $jenis_aset_ict) {
            JenisAsetIct::create(['nama' => $jenis_aset_ict]);
          }

          foreach ($lokasi_utama_icts as $lokasi_utama_ict) {
            LokasiUtamaIct::create(['nama' => $lokasi_utama_ict]);
          }

          foreach ($jawatans as $jawatan) {
            Jawatan::create(['nama' => $jawatan]);
          }
    }
}
