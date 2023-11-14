<?php

namespace App\Http\Controllers;

use App\Models\Jawatan;
use App\Http\Requests\StoreJawatanRequest;
use App\Http\Requests\UpdateJawatanRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JawatanController extends Controller
{
    public function index() : View
    {
        return view('jawatans.index', [
            'jawatans' => Jawatan::latest()->paginate(15)
        ]);
    }

    public function create() : View
    {
        return view('jawatans.create');
    }

    public function store(StoreJawatanRequest $request) : RedirectResponse
    {
        Jawatan::create($request->all());
        return redirect()->route('jawatans.index')
                ->withSuccess('Lokasi Utama Berjaya Ditambah.');
    }

    public function edit(Jawatan $jawatan) : View
    {
        return view('jawatans.edit', [
            'jawatan' => $jawatan
        ]);
    }

    public function update(UpdateJawatanRequest $request, Jawatan $jawatan)  : RedirectResponse
    {
        $jawatan->update($request->all());
        return redirect()->back()
                ->withSuccess('Kategori Aduan Berjaya Kikemaskini.');
    }

    public function destroy(Jawatan $jawatan) : RedirectResponse
    {
        $jawatan->delete();
        return redirect()->route('jawatans.index')
                ->withSuccess('Kategori Aduan Berjaya Dihapus.');
    }
}
