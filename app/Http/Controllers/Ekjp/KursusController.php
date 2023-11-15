<?php
namespace App\Http\Controllers\Ekjp;
use App\Models\Ekjp\EkjpKursuses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KursusController extends Controller
{
    public function kursus(Request $request)
    {
        $data = $request->validate([
            'id' => 'required'
        ]);
        $kursus = EkjpKursuses::all();
        return Response::json($kursus);
    }

    public function senarai()
    {
        $viewData = [];
        $viewData["senarai"] = EkjpKursuses::all();
        return view('ekjp.table')->with("viewData", $viewData);
    }

}
