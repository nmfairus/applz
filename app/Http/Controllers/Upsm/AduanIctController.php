<?php

namespace App\Http\Controllers\Upsm;

use App\DataTables\AduanIctsDataTable;
use App\Http\Controllers\Controller;
use App\Models\AduanIct;
use App\Http\Requests\StoreAduanIctRequest;
use App\Http\Requests\UpdateAduanIctRequest;
use App\Models\JenisAsetIct;
use App\Models\KategoriAduanIct;
use App\Models\LokasiUtamaIct;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Storage;

class AduanIctController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-aduanict|edit-aduanict|delete-aduanict', ['only' => ['index','show']]);
       $this->middleware('permission:create-aduanict|view-staf', ['only' => ['create','store']]);
       $this->middleware('permission:edit-aduanict', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-aduanict', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('aduanicts.index', [
            'aduanicts' => AduanIct::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $jenisasetict = JenisAsetIct::pluck('nama');
        $kategoriaduanict = KategoriAduanIct::pluck('nama');
        $lokasiutamaict = LokasiUtamaIct::pluck('nama');
        return view('aduanicts.create', [
            'jenisasetict' => $jenisasetict,
            'kategoriaduanict' => $kategoriaduanict,
            'lokasiutamaict' => $lokasiutamaict
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAduanIctRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
            // put image in the public storage
           $filePath = Storage::disk('public')->put('gambar-aduan', request()->file('gambar'));
           $validated['gambar'] = $filePath;
       }

        AduanIct::create($validated);
        return redirect()->back()
                ->withSuccess('Aduan Berjaya Dihantar.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AduanIct $aduanict) : View
    {
        return view('aduanicts.show', [
            'aduanict' => $aduanict
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AduanIct $aduanict) : View
    {
        $jenisasetict = JenisAsetIct::pluck('nama');
        $kategoriaduanict = KategoriAduanIct::pluck('nama');
        $lokasiutamaict = LokasiUtamaIct::pluck('nama');
        return view('aduanicts.edit', [
            'aduanict' => $aduanict,
            'jenisasetict' => $jenisasetict,
            'kategoriaduanict' => $kategoriaduanict,
            'lokasiutamaict' => $lokasiutamaict
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAduanIctRequest $request, AduanIct $aduanict) : RedirectResponse
    {
        
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
           $filePath = Storage::disk('public')->put('gambar-aduan', request()->file('gambar'));
           $validated['gambar'] = $filePath;
           if($request->gambar_lama) {
            Storage::disk('public')->delete($request->gambar_lama);
            }
       }

        $aduanict->update($validated);
        return redirect()->back()
                ->withSuccess('Aduan ICT Berjaya Dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AduanIct $aduanict) : RedirectResponse
    {

        if ($aduanict->gambar) 
       {
        Storage::disk('public')->delete($aduanict->gambar);
       } 

        $aduanict->delete();
        return redirect()->route('aduanicts.index')
                ->withSuccess('Aduan ICT Berjaya Dihapus.');
    }

    public function print(AduanIct $aduanict)
    {

        $data = [
            'aduanict' => $aduanict
        ];

        $html = view()->make('aduanicts/print', $data)->render();
        
        TCPDF::SetTitle('Cetak Laporan');
        TCPDF::AddPage();
        TCPDF::writeHTML($html, true, false, true, false, '');

        TCPDF::Output('hello_world.pdf');
    }

    public function report(AduanIctsDataTable $dataTable)
    {
        return $dataTable->render('aduanicts.report');
    }
}
