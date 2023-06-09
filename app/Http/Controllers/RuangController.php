<?php

namespace App\Http\Controllers;

use App\Models\ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ruang::orderBy('nama', 'asc')->get();
        return view('ruang/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ruang/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Session::flash('nama',$request->nama);
        Session::flash('ket',$request->ket);

        $request->validate([
            'nama'=>'required',
            'ket'=>'required'
        ],[
            'nama.required'=>'Nama Tidak Boleh Kosong',
            'ket.required'=>'Keterangan Tidak Boleh Kosong'
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'ket' => $request->input('ket')
        ];
        ruang::create($data);
        return redirect('ruang')->with('success', 'Data Berhasil Di Masukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = ruang::where('id', $id)->first();
        return view('ruang/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama'=>'required',
            'ket'=>'required'
        ],[
            'nama.required'=>'Nama Tidak Boleh Kosong',
            'ket.required'=>'Keterangan Tidak Boleh Kosong',
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'ket' => $request->input('ket')
        ];
        ruang::where('id', $id)->update($data);
        return redirect('ruang')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ruang::where('id', $id)->delete();
        return redirect('ruang')->with('success', 'Data Berhasil Di Hapus');
    }
}

// by->zwan06