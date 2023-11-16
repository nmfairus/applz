<?php

namespace App\Http\Controllers\Uppa;

use App\Http\Controllers\Controller;
use App\Models\KategoriAduanUppa;
use App\Http\Requests\StoreKategoriAduanUppaRequest;
use App\Http\Requests\UpdateKategoriAduanUppaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KategoriAduanUppaController extends Controller
{
    public function index() : View
    {
        return view('kategoriaduanuppas.index', [
            'kategoriaduanuppas' => KategoriAduanUppa::latest()->paginate(15)
        ]);
    }

    public function create() : View
    {
        return view('kategoriaduanuppas.create');
    }

    public function store(StoreKategoriAduanUppaRequest $request) : RedirectResponse
    {
        KategoriAduanUppa::create($request->all());
        return redirect()->route('kategoriaduanuppas.index')
                ->withSuccess('Kategori Aduan Berjaya Ditambah.');
    }

    public function edit(KategoriAduanUppa $kategoriaduanuppa) : View
    {
        return view('kategoriaduanuppas.edit', [
            'kategoriaduanuppa' => $kategoriaduanuppa
        ]);
    }

    public function update(UpdateKategoriAduanUppaRequest $request, KategoriAduanUppa $kategoriaduanuppa)  : RedirectResponse
    {
        $kategoriaduanuppa->update($request->all());
        return redirect()->back()
                ->withSuccess('Kategori Aduan Berjaya Kikemaskini.');
    }

    public function destroy(KategoriAduanUppa $kategoriaduanuppa)
    {
        $kategoriaduanuppa->delete();
        return redirect()->route('kategoriaduanuppas.index')
                ->withSuccess('Kategori Aduan Berjaya Dihapus.');
    }
}
