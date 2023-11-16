<?php

namespace App\Http\Controllers\Uppa;

use App\Http\Controllers\Controller;
use App\Models\JenisAsetUppa;
use App\Http\Requests\StoreJenisAsetUppaRequest;
use App\Http\Requests\UpdateJenisAsetUppaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JenisAsetUppaController extends Controller
{
    public function index()
    {
        return view('jenisasetuppas.index', [
            'jenisasetuppas' => JenisAsetUppa::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisasetuppas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJenisAsetUppaRequest $request) : RedirectResponse
    {
        JenisAsetUppa::create($request->all());
        return redirect()->route('jenisasetuppas.index')
                ->withSuccess('New Jenis Aset UPPA is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisAsetUppa $jenisasetuppa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisAsetUppa $jenisasetuppa) : View
    {
        return view('jenisasetuppas.edit', [
            'jenisasetuppa' => $jenisasetuppa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenisAsetUppaRequest $request, JenisAsetUppa $jenisasetuppa) : RedirectResponse
    {
        $jenisasetuppa->update($request->all());
        return redirect()->route('jenisasetuppas.index')
                ->withSuccess('Jenis Aset is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisAsetUppa $jenisasetuppa) : RedirectResponse
    {
        $jenisasetuppa->delete();
        return redirect()->route('jenisasetuppas.index')
                ->withSuccess('jenisasetuppa is deleted successfully.');
    }
}
