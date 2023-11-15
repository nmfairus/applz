<?php

namespace App\Http\Controllers\Upsm;

use App\Http\Controllers\Controller;
use App\Models\LokasiUtamaIct;
use App\Http\Requests\StoreLokasiUtamaIctRequest;
use App\Http\Requests\UpdateLokasiUtamaIctRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LokasiUtamaIctController extends Controller
{
    public function index() : View
    {
        return view('lokasiutamaicts.index', [
            'lokasiutamaicts' => LokasiUtamaIct::latest()->paginate(15)
        ]);
    }

    public function create() : View
    {
        return view('lokasiutamaicts.create');
    }

    public function store(StoreLokasiUtamaIctRequest $request) : RedirectResponse
    {
        LokasiUtamaIct::create($request->all());
        return redirect()->route('lokasiutamaicts.index')
                ->withSuccess('Lokasi Utama Berjaya Ditambah.');
    }

    public function edit(LokasiUtamaIct $lokasiutamaict) : View
    {
        return view('lokasiutamaicts.edit', [
            'lokasiutamaict' => $lokasiutamaict
        ]);
    }

    public function update(UpdateLokasiUtamaIctRequest $request, LokasiUtamaIct $lokasiutamaict)  : RedirectResponse
    {
        $lokasiutamaict->update($request->all());
        return redirect()->back()
                ->withSuccess('Kategori Aduan Berjaya Kikemaskini.');
    }

    public function destroy(LokasiUtamaIct $lokasiutamaict) : RedirectResponse
    {
        $lokasiutamaict->delete();
        return redirect()->route('lokasiutamaicts.index')
                ->withSuccess('Kategori Aduan Berjaya Dihapus.');
    }
}
