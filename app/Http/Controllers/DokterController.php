<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data = dokter::orderBy('nama', 'asc')->get();
        return view('dokter/index')->with('data',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dokter/create');
       
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
        Session::flash('spesialis',$request->spesialis);
        Session::flash('no_hp',$request->no_hp);
        Session::flash('alamat',$request->alamat);

        $request->validate([
            'nama'=>'required',
            'spesialis'=>'required',
            'no_hp'=>'required|numeric',
            'alamat'=>'required'
        ],[
            'nama.required'=>'Nama Tidak Boleh Kosong',
            'spesialis.required'=>'Spesialis Tidak Boleh Kosong',
            'no_hp.required'=>'Nomor Handphone Tidak Boleh Kosong',
            'no_hp.numeric'=>'Nomor Handphone diisi dalam Angka',
            'alamat.required'=>'Alamat Tidak Boleh Kosong'
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'spesialis' => $request->input('spesialis'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat')
        ];
        dokter::create($data);
        return redirect('dokter')->with('success', 'Data Berhasil Di Masukan');
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
        $data = dokter::where('id', $id)->first();
        return view('dokter/detail')->with('data', $data);
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
        $data = dokter::where('id', $id)->first();
        return view('dokter/edit')->with('data', $data);
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
            'spesialis'=>'required',
            'no_hp'=>'required|numeric',
            'alamat'=>'required'
        ],[
            'nama.required'=>'Nama Tidak Boleh Kosong',
            'spesialis.required'=>'Spesialis Tidak Boleh Kosong',
            'no_hp.required'=>'Nomor Handphone Tidak Boleh Kosong',
            'no_hp.numeric'=>'Nomor Handphone diisi dalam Angka',
            'alamat.required'=>'Alamat Tidak Boleh Kosong'
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'spesialis' => $request->input('spesialis'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat')
        ];
        dokter::where('id', $id)->update($data);
        return redirect('dokter')->with('success', 'Data Berhasil Di Ubah');
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
        dokter::where('id', $id)->delete();
        return redirect('dokter')->with('success', 'Data Berhasil Di Hapus');
    }
}

// by->zwan06