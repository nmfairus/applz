<?php

namespace App\Http\Controllers;

use App\Models\JenisAsetIct;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JenisAsetIctController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jenisaseticts.index', [
            'jenisaseticts' => JenisAsetIct::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisaseticts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        JenisAsetIct::create($request->all());
        return redirect()->route('jenisaseticts.index')
                ->withSuccess('New Jenis Aset ICT is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisAsetIct $jenisasetict)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisAsetIct $jenisasetict) : View
    {
        return view('jenisaseticts.edit', [
            'jenisasetict' => $jenisasetict
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisAsetIct $jenisasetict) : RedirectResponse
    {
        $jenisasetict->update($request->all());
        return redirect()->route('jenisaseticts.index')
                ->withSuccess('Jenis Aset is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisAsetIct $jenisasetict) : RedirectResponse
    {
        $jenisasetict->delete();
        return redirect()->route('jenisaseticts.index')
                ->withSuccess('jenisasetict is deleted successfully.');
    }
}
