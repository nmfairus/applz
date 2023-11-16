<?php

namespace App\Http\Controllers\Upsm;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePublicaduanictRequest;
use App\Models\AduanIct;
use App\Models\JenisAsetIct;
use App\Models\KategoriAduanIct;
use App\Models\LokasiUtamaIct;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Storage;

class PublicAduanIctController extends Controller
{
    public function create() : View
    {
        $jenisaset = JenisAsetIct::pluck('nama');
        $kategoriaduanict = KategoriAduanIct::pluck('nama');
        $lokasiutamaict = LokasiUtamaIct::pluck('nama');
        return view('publicaduanict', [
            'jenisaset' => $jenisaset,
            'kategoriaduanict' => $kategoriaduanict,
            'lokasiutamaict' => $lokasiutamaict
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicaduanictRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
            // put image in the public storage
           $filePath = Storage::disk('public')->put('gambar-aduan', request()->file('gambar'));
           $validated['gambar'] = $filePath;
       }
        
        AduanIct::create($validated);
        return redirect()->back()
                ->withSuccess('Laporan Berjaya Dihantar.');
    }

}
