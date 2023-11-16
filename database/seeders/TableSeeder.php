<?php

namespace Database\Seeders;

use App\Models\Jawatan;
use App\Models\JenisAsetIct;
use App\Models\JenisAsetUppa;
use App\Models\KategoriAduanIct;
use App\Models\KategoriAduanUppa;
use App\Models\LokasiUtamaIct;
use App\Models\LokasiUtamaUppa;
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
            'Peg. Latihan Vokasional',
            'Pen. Peg. Latihan Vokasional',
            'Peg. Perkhidmatan Pendidikan',
            'Pen. Peg. Teknologi Maklumat',
            'Pen. Peg. Tadbir',
            'Pem. Tadbir',
            'Pem. Perpustakaan'
         ];

         $kategori_aduan_uppas = [
            'Kerosakan Awam',
            'Kerosakan Elektrik',
            'Kerosakan Air-cond'
         ];

         $jenis_aset_uppas = [
            'Lampu',
            'Paip',
            'Bumbung',
            'Pintu'
         ];

         $lokasi_utama_uppas = [
            'Bengunan Pentadbiran',
            'Bangunan Pusat Sumber',
            'Bangunan Elektronik',
            'Bangunan Mekatronik',
            'Bangunan Telekomunikasi',
            'Bangunan Mekanikal',
            'Dewan Kuliah Utama',
            'Dewan Seri Mahang',
            'Kafeteria',
            'Surau',
            'Taska',
            'Kuarters',
            'Bangunan Pengawal',
            'Dewan Makan',
            'Asrama'
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

          foreach ($kategori_aduan_uppas as $kategori_aduan_uppa) {
            KategoriAduanUppa::create(['nama' => $kategori_aduan_uppa]);
          }

          foreach ($jenis_aset_uppas as $jenis_aset_uppa) {
            JenisAsetUppa::create(['nama' => $jenis_aset_uppa]);
          }

          foreach ($lokasi_utama_uppas as $lokasi_utama_uppa) {
            LokasiUtamaUppa::create(['nama' => $lokasi_utama_uppa]);
          }

    }
}
