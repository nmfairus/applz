<?php

namespace App\Http\Controllers\Ekjp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::orderBy('id','desc')->paginate(8);

        return view('list',$data);
    }


    public function show($id)
    {
        $where = array('id' => $id);
        $user  = User::where($where)->first();

        return Response::json($user);
    }
}
