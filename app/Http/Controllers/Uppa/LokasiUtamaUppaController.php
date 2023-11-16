<?php

namespace App\Http\Controllers\Uppa;

use App\Http\Controllers\Controller;
use App\Models\LokasiUtamaUppa;
use App\Http\Requests\StoreLokasiUtamaUppaRequest;
use App\Http\Requests\UpdateLokasiUtamaUppaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LokasiUtamaUppaController extends Controller
{
    public function index() : View
    {
        return view('lokasiutamauppas.index', [
            'lokasiutamauppas' => LokasiUtamaUppa::latest()->paginate(15)
        ]);
    }

    public function create() : View
    {
        return view('lokasiutamauppas.create');
    }

    public function store(StoreLokasiUtamaUppaRequest $request) : RedirectResponse
    {
        LokasiUtamaUppa::create($request->all());
        return redirect()->route('lokasiutamauppas.index')
                ->withSuccess('Lokasi Utama Berjaya Ditambah.');
    }

    public function edit(LokasiUtamaUppa $lokasiutamauppa) : View
    {
        return view('lokasiutamauppas.edit', [
            'lokasiutamauppa' => $lokasiutamauppa
        ]);
    }

    public function update(UpdateLokasiUtamaUppaRequest $request, LokasiUtamaUppa $lokasiutamauppa)  : RedirectResponse
    {
        $lokasiutamauppa->update($request->all());
        return redirect()->back()
                ->withSuccess('Kategori Aduan Berjaya Kikemaskini.');
    }

    public function destroy(LokasiUtamaUppa $lokasiutamauppa) : RedirectResponse
    {
        $lokasiutamauppa->delete();
        return redirect()->route('lokasiutamauppas.index')
                ->withSuccess('Kategori Aduan Berjaya Dihapus.');
    }
}
