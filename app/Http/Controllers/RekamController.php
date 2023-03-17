<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\obat;
use App\Models\pasien;
use App\Models\rekam;
use App\Models\ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class RekamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = rekam::orderBy('id', 'asc')->get();
        //$data = rekam::with('pasien')->paginate(2);
        return view('rekam/index')->with('data',$data);
        //$rekam = rekam::find(1);
        //return $rekam->pasiens->nama;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rekam/create', [
            'pasien' => pasien::get(),
            'dokter' => dokter::get(),
            'obat' => obat::get(),
            'ruang' => ruang::get()
        ]);
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
        Session::flash('tgl_periksa',$request->tgl_periksa);
        Session::flash('pasien_id',$request->pasien_id);
        Session::flash('keluhan',$request->keluhan);
        Session::flash('dokter_id',$request->dokter_id);
        Session::flash('diagnosa',$request->diagnosa);
        Session::flash('obat_id',$request->obat_id);
        Session::flash('ruang_id',$request->ruang_id);

        $request->validate([
            'tgl_periksa'=>'required',
            'pasien_id'=>'required',
            'keluhan'=>'required',
            'dokter_id'=>'required',
            'diagnosa'=>'required',
            'obat_id'=>'required',
            'ruang_id'=>'required'
        ],[
            'tgl_periksa.required'=>'Tanggal Periksa Tidak Boleh Kosong',
            'pasien_id.required'=>'Pasien Tidak Boleh Kosong',
            'keluhan.required'=>'Keluhan Tidak Boleh Kosong',
            'dokter_id.required'=>'Pemeriksa Tidak Boleh Kosong',
            'diagnosa.required'=>'Diagnosa Tidak Boleh Kosong',
            'obat_id.required'=>'Obat Tidak Boleh Kosong',
            'ruang_id.required'=>'Ruang Tidak Boleh Kosong'
        ]);
        $data = [
            'tgl_periksa' => $request->input('tgl_periksa'),
            'pasien_id' => $request->input('pasien_id'),
            'keluhan' => $request->input('keluhan'),
            'dokter_id' => $request->input('dokter_id'),
            'diagnosa' => $request->input('diagnosa'),
            'obat_id' => $request->input('obat_id'),
            'ruang_id' => $request->input('ruang_id')
        ];
        rekam::create($data);
        return redirect('rekam')->with('success', 'Data Berhasil Di Masukan');
    
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
        $data = rekam::where('id', $id)->first();
        return view('rekam/detail')->with('data', $data);
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
        $data = rekam::where('id', $id)->first();
        return view('rekam/edit',  [
            'pasien' => pasien::get(),
            'dokter' => dokter::get(),
            'obat' => obat::get(),
            'ruang' => ruang::get()
        ])->with('data', $data);
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
            'tgl_periksa'=>'required',
            'pasien_id'=>'required',
            'keluhan'=>'required',
            'dokter_id'=>'required',
            'diagnosa'=>'required',
            'obat_id'=>'required',
            'ruang_id'=>'required'
        ],[
            'tgl_periksa.required'=>'Tanggal Periksa Tidak Boleh Kosong',
            'pasien_id.required'=>'Pasien Tidak Boleh Kosong',
            'keluhan.required'=>'Keluhan Tidak Boleh Kosong',
            'dokter_id.required'=>'Pemeriksa Tidak Boleh Kosong',
            'diagnosa.required'=>'Diagnosa Tidak Boleh Kosong',
            'obat_id.required'=>'Obat Tidak Boleh Kosong',
            'ruang_id.required'=>'Ruang Tidak Boleh Kosong'
        ]);
        $data = [
            'tgl_periksa' => $request->input('tgl_periksa'),
            'pasien_id' => $request->input('pasien_id'),
            'keluhan' => $request->input('keluhan'),
            'dokter_id' => $request->input('dokter_id'),
            'diagnosa' => $request->input('diagnosa'),
            'obat_id' => $request->input('obat_id'),
            'ruang_id' => $request->input('ruang_id')
        ];
        rekam::where('id', $id)->update($data);
        return redirect('rekam')->with('success', 'Data Berhasil Di Ubah');
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
        rekam::where('id', $id)->delete();
        return redirect('rekam')->with('success', 'Data Berhasil Di Hapus');
    }
}

// by->zwan06