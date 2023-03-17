<?php

namespace App\Http\Controllers;

use App\Models\rekam;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\ServiceProvider;

class LaporanController extends Controller
{
    //
    public function index()
    {
        return view('laporan/index');
    }

    public function cetak($tgl_awal, $tgl_akhir)
    {
        //dd("Tanggal Awal : ".$tgl_awal, "Tanggal Akhir".$tgl_akhir);
        //$data = rekam::with('rekam')->whereBetween('tgl_periksa', [$tgl_awal,$tgl_akhir])->get();
        //return view('laporan/cetak')->with('data',$data);
        //$data = rekam::with('pasien')->paginate(2);
        $data = rekam::orderBy('id', 'asc')->whereBetween('tgl_periksa', [$tgl_awal,$tgl_akhir])->get();
        //$pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('laporan/cetak',['data'=>$data]);
        return view('laporan/cetak',compact('data'))->with('data',$data);
        //return $pdf->stream('Laporan_Rekam_Medis');
        
    }
   
}

// by->zwan06