<?php

namespace App\Http\Controllers\Upsm;

use App\Http\Controllers\Controller;
use App\Models\KategoriAduanIct;
use App\Http\Requests\StoreKategoriAduanIctRequest;
use App\Http\Requests\UpdateKategoriAduanIctRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KategoriAduanIctController extends Controller
{
    public function index() : View
    {
        return view('kategoriaduanicts.index', [
            'kategoriaduanicts' => KategoriAduanIct::latest()->paginate(15)
        ]);
    }

    public function create() : View
    {
        return view('kategoriaduanicts.create');
    }

    public function store(StoreKategoriAduanIctRequest $request) : RedirectResponse
    {
        KategoriAduanIct::create($request->all());
        return redirect()->route('kategoriaduanicts.index')
                ->withSuccess('Kategori Aduan Berjaya Ditambah.');
    }

    public function edit(KategoriAduanIct $kategoriaduanict) : View
    {
        return view('kategoriaduanicts.edit', [
            'kategoriaduanict' => $kategoriaduanict
        ]);
    }

    public function update(UpdateKategoriAduanIctRequest $request, KategoriAduanIct $kategoriaduanict)  : RedirectResponse
    {
        $kategoriaduanict->update($request->all());
        return redirect()->back()
                ->withSuccess('Kategori Aduan Berjaya Kikemaskini.');
    }

    public function destroy(KategoriAduanIct $kategoriaduanict)
    {
        $kategoriaduanict->delete();
        return redirect()->route('kategoriaduanicts.index')
                ->withSuccess('Kategori Aduan Berjaya Dihapus.');
    }
}
