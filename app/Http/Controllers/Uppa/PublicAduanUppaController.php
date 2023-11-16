<?php

namespace App\Http\Controllers\Uppa;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePublicAduanUppaRequest;
use App\Models\AduanUppa;
use App\Models\JenisAsetUppa;
use App\Models\KategoriAduanUppa;
use App\Models\LokasiUtamaUppa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Storage;

class PublicAduanUppaController extends Controller
{
    public function create() : View
    {
        $jenisaset = JenisAsetUppa::pluck('nama');
        $kategoriaduanuppa = KategoriAduanUppa::pluck('nama');
        $lokasiutamauppa = LokasiUtamaUppa::pluck('nama');
        return view('publicaduanuppa', [
            'jenisaset' => $jenisaset,
            'kategoriaduanuppa' => $kategoriaduanuppa,
            'lokasiutamauppa' => $lokasiutamauppa
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicAduanUppaRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
            // put image in the public storage
           $filePath = Storage::disk('public')->put('gambar-aduan', request()->file('gambar'));
           $validated['gambar'] = $filePath;
       }
        
        AduanUppa::create($validated);
        return redirect()->back()
                ->withSuccess('Laporan Berjaya Dihantar.');
    }
}
