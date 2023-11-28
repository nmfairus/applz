<?php

namespace App\Http\Controllers\Ekjp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekjp\EkjpKursuses;
use App\Models\Ekjp\EkjpRecords;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         // get all the sharks
        // $kursus = EkjpKursuses::all();

        $kursus = DB::table('ekjp_kursuses')
                    ->leftJoin('ekjp_records', 'ekjp_records.kursus_id', '=', 'ekjp_kursuses.id')
                    ->select('ekjp_kursuses.id', 'ekjp_kursuses.kursus', 'ekjp_kursuses.bidang', 'ekjp_records.kursus_id', DB::raw('count(ekjp_records.kursus_id) AS bil'))
                    ->groupBy('ekjp_records.kursus_id', 'ekjp_kursuses.id', 'ekjp_kursuses.kursus', 'ekjp_kursuses.bidang')
                    ->get();

         // load the view and pass the sharks
         return View('ekjp.admin.index')->with('viewData', $kursus);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // load the create form (app/views/sharks/create.blade.php)
        return View('ekjp.admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kursus' => 'required|string',
            'bidang' => 'required|string',
            'tempoh' => 'required|string',
            'tarikh' => 'required|string',
            'yuran' => 'required|string',
            'kandungan' => 'required|string',
            'catatan' => '',
        ], [
            'kursus.required' => 'ruang nama mesti diisi',
            'bidang.required' => 'ruang bidang mesti diisi',
            'tempoh.required' => 'ruang tempoh mesti diisi',
            'tarikh.required' => 'ruang tarikh mesti diisi',
            'yuran.required' => 'ruang yuran mesti diisi',
            'kandungan.required' => 'ruang kandungan mesti diisi',
        ]);

        $kursus = EkjpKursuses::create([
            'kursus' => $validatedData['kursus'],
            'bidang' => $validatedData['bidang'],
            'tempoh' => $validatedData['tempoh'],
            'tarikh' => $validatedData['tarikh'],
            'yuran' => $validatedData['yuran'],
            'kandungan' => $validatedData['kandungan'],
            'catatan' => $validatedData['catatan'],
        ]);
        return redirect('ekjp/admin')->with('message', 'Kursus baru berjaya ditambah!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $viewData = [];
        $viewData['kursus'] = EkjpKursuses::find($id);
        $viewData['pemohon']  = EkjpRecords::leftJoin('ekjp_kursuses', 'ekjp_kursuses.id', '=', 'ekjp_records.kursus_id')
                        ->leftJoin('ekjp_users', 'ekjp_records.user_noic', '=', 'ekjp_users.noic')
                        ->select('ekjp_users.*', 'ekjp_records.id AS id', 'ekjp_records.kursus_id AS rekod_id')
                        ->where('ekjp_kursuses.id',$id)
                        ->get();

        // load the view and pass the sharks
        return View('ekjp.admin.show')->with('viewData', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $viewData = EkjpKursuses::find($id);
        // load the view and pass the sharks
        return View('ekjp.admin.edit')->with('viewData', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'kursus' => 'required|string',
            'bidang' => 'required|string',
            'tempoh' => 'required|string',
            'tarikh' => 'required|string',
            'yuran' => 'required|string',
            'kandungan' => 'required|string',
            'catatan' => '',
        ], [
            'kursus.required' => 'ruang nama mesti diisi',
            'bidang.required' => 'ruang bidang mesti diisi',
            'tempoh.required' => 'ruang tempoh mesti diisi',
            'tarikh.required' => 'ruang tarikh mesti diisi',
            'yuran.required' => 'ruang yuran mesti diisi',
            'kandungan.required' => 'ruang kandungan mesti diisi',
        ]);
        $kursus = EkjpKursuses::find($id);

        $kursus->kursus = $validatedData['kursus'];
        $kursus->bidang = $validatedData['bidang'];
        $kursus->tempoh = $validatedData['tempoh'];
        $kursus->tarikh = $validatedData['tarikh'];
        $kursus->yuran = $validatedData['yuran'];
        $kursus->kandungan = $validatedData['kandungan'];
        $kursus->catatan = $validatedData['catatan'];

        $kursus->save();

        return redirect('ekjp/admin')->with('message', 'Kursus baru berjaya dipinda!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        $arahan = $request->input('arahan');


        if($arahan=='kursus')
        {
            $kursus = EkjpKursuses::find($id);

            $res=EkjpRecords::where('kursus_id',$kursus['id'])->delete();

            $kursus->delete();
            return redirect()->route('admin.index')->with('message', 'kursus bejaya dibuang!!!');

        } else if($arahan=='rekod'){
            $page_id = $request->input('kursus');
            $rekod = EkjpRecords::find($id);
            $rekod->delete();
            return redirect()->route('admin.show', $page_id )->with('message', 'Rekod bejaya dibuang!!!');
        }

    }
}
