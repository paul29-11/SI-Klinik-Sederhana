<?php

namespace App\Http\Controllers;

use App\Models\rekam;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    //
    function index()
    {
        //$data = rekam::all();
        // $data = rekam::orderBy('nama', 'asc')->paginate(10); ->untuk membuat batas
        $data = rekam::orderBy('nama', 'asc')->get();
        return view('rekam/index')->with('data',$data);
    }
    function detail($id)
    {
        $data = rekam::where('id', $id)->first();
        return view('rekam/detail')->with('data', $data);
    }
}
