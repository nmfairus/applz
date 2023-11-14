<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicAduanIctRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'jenis_aset' => 'required|string',
            'kategori_aduan' => 'required|string',
            'tahap_kerosakan' => 'required|string',
            'lokasi_utama_kerosakan' => 'required|string',
            'lokasi_terperinci_kerosakan' => 'required|string',
            'no_siri' => 'nullable|string',
            'pengguna_terakhir' => 'nullable|string',
            'nama_pelapor' => 'required|string',
            'email_pelapor' => 'required|string',
            'phone_pelapor' => 'nullable|string',
            'jawatan_pelapor' => 'required|string',
            'perihal_kerosakan' => 'required|string',
            'tarikh_kerosakan' => 'nullable|string',
            'tarikh_laporan' => 'required|string',
            'gambar' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'status_pembaikan' => 'nullable|string',
            'anggaran_kos' => 'nullable|string',
            'kos_terdahulu' => 'nullable|string',
            'syor_tindakan' => 'nullable|string',
            'nama_peg_aset' => 'nullable|string',
            'jawatan_peg_aset' => 'nullable|string',
            'tarikh_tindakan' => 'nullable|string'
        ];
    }
}
