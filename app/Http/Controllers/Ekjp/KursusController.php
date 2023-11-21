<?php
namespace App\Http\Controllers\Ekjp;
use App\Models\Ekjp\EkjpKursuses;
use App\Models\Ekjp\EkjpUsers;
use App\Models\Ekjp\EkjpRecords;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KursusController extends Controller
{
        public function kursus($id)
    {
        $kursus  = EkjpKursuses::find($id);

        return response()->json($kursus, 200);
    }

    public function senarai()
    {
        $viewData = [];
        $viewData["senarai"] = EkjpKursuses::all();
        return view('ekjp.senarai')->with("viewData", $viewData);
    }

    public function mohon(Request $request, $id)
    {
        $validatedData = [];

        $validatedData['kursus_id']= $id;
        $validatedData['readonly']= '';

        $kursus  = EkjpKursuses::find($id);
        $validatedData['kursus'] = $kursus->kursus;
        $validatedData['bidang'] = $kursus->bidang;
        $validatedData['yuran'] = $kursus->yuran;
        $validatedData['kandungan'] = $kursus->kandungan;
        $validatedData['tempoh'] = $kursus->tempoh;
        $validatedData['tarikh'] = $kursus->tarikh;

        $method = $request->method();
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'noic' => 'required|numeric|digits:12',
            ], [
                'noic.required' => 'No. Kad Pengenalan field is required.',
            ]);

            $user = DB::table('ekjp_users')->where('noic', $validatedData['noic'])->first();

            if($user != null){
                $validatedData['nama'] = $user->nama;
                $validatedData['email'] = $user->email;
                $validatedData['telefon'] = $user->telefon;
                $validatedData['user_id'] = $user->id;
                $validatedData['readonly'] = 'Readonly';
            }
            return redirect('ekjp/mohon/'.$id)->with("mohonData", $validatedData);
            //return redirect()->route('/ekjp/mohon', ['id' => $id]);
        } else return view('ekjp.mohon')->with("mohonData", $validatedData);
    }

    public function mohonForm(Request $request)
    {
        $validatedData = $request->validate(
            [
            'noic' => 'required|numeric|digits:12',
            'nama' => 'required|string',
            'email' => 'required|email',
            'telefon' => 'required|string',
            'kursus_id' => 'string',
            ],
            [
            'noic.required' => 'No. Kad Pengenalan field is required.',
            'nama.required' => 'Nama field is required.',
            'email.required' => 'Email field is required.',
            'telefon.required' => 'Telefon field is required.',
            ]);

        $validatedData['readonly']= "Readonly Disabled";

        $user = EkjpUsers::updateOrCreate(
            ['noic' => $validatedData['noic']],
            ['nama' => $validatedData['nama'], 'email' => $validatedData['email'], 'telefon' => $validatedData['telefon']]

        );

        $record = EkjpRecords::updateOrCreate(
            ['kursus_id' => $validatedData['kursus_id'], 'user_noic' => $validatedData['noic']],
            []

        );

        $viewData = [];
        $viewData['user'] = $user;
        $viewData['record'] = $record;
        $viewData['message'] = "Permohonan telah direkodkan dan akan diproses.";

        return redirect('ekjp/')->with("mohonData", $viewData);
    }
}
