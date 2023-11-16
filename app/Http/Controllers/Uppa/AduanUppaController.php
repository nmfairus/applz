<?php

namespace App\Http\Controllers\Uppa;

use App\DataTables\AduanUppaDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAduanUppaRequest;
use App\Http\Requests\UpdateAduanUppaRequest;
use App\Models\AduanUppa;
use App\Models\JenisAsetUppa;
use App\Models\KategoriAduanUppa;
use App\Models\LokasiUtamaUppa;
use Illuminate\Http\RedirectResponse;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Storage;

class AduanUppaController extends Controller
{
    public function index() : View
    {
        return view('aduanuppas.index', [
            'aduanuppas' => AduanUppa::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $jenisasetuppa = JenisAsetUppa::pluck('nama');
        $kategoriaduanuppa = KategoriAduanUppa::pluck('nama');
        $lokasiutamauppa = LokasiUtamaUppa::pluck('nama');
        return view('aduanuppas.create', [
            'jenisasetuppa' => $jenisasetuppa,
            'kategoriaduanuppa' => $kategoriaduanuppa,
            'lokasiutamauppa' => $lokasiutamauppa
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAduanUppaRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
            // put image in the public storage
           $filePath = Storage::disk('public')->put('gambar-aduan', request()->file('gambar'));
           $validated['gambar'] = $filePath;
       }

        AduanUppa::create($validated);
        return redirect()->back()
                ->withSuccess('Aduan Berjaya Dihantar.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AduanUppa $aduanuppa) : View
    {
        return view('aduanuppas.show', [
            'aduanuppa' => $aduanuppa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AduanUppa $aduanuppa) : View
    {
        $jenisasetuppa = JenisAsetUppa::pluck('nama');
        $kategoriaduanuppa = KategoriAduanUppa::pluck('nama');
        $lokasiutamauppa = LokasiUtamaUppa::pluck('nama');
        return view('aduanuppas.edit', [
            'aduanuppa' => $aduanuppa,
            'jenisasetuppa' => $jenisasetuppa,
            'kategoriaduanuppa' => $kategoriaduanuppa,
            'lokasiutamauppa' => $lokasiutamauppa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAduanUppaRequest $request, AduanUppa $aduanuppa) : RedirectResponse
    {
        
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
           $filePath = Storage::disk('public')->put('gambar-aduan', request()->file('gambar'));
           $validated['gambar'] = $filePath;
           if($request->gambar_lama) {
            Storage::disk('public')->delete($request->gambar_lama);
            }
       }

        $aduanuppa->update($validated);
        return redirect()->back()
                ->withSuccess('Aduan ICT Berjaya Dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AduanUppa $aduanuppa) : RedirectResponse
    {

        if ($aduanuppa->gambar) 
       {
        Storage::disk('public')->delete($aduanuppa->gambar);
       } 

        $aduanuppa->delete();
        return redirect()->route('aduanuppas.index')
                ->withSuccess('Aduan ICT Berjaya Dihapus.');
    }

    public function print(AduanUppa $aduanuppa)
    {

        $data = [
            'aduanuppa' => $aduanuppa
        ];

        $html = view()->make('aduanuppas/print', $data)->render();
        
        TCPDF::SetTitle('Cetak Laporan');
        TCPDF::AddPage();
        TCPDF::writeHTML($html, true, false, true, false, '');

        TCPDF::Output('hello_world.pdf');
    }

    public function report(AduanUppaDataTable $dataTable)
    {
        return $dataTable->render('aduanuppas.report');
    }


}
