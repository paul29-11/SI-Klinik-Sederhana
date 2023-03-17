<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\obat;
use App\Models\pasien;
use App\Models\ruang;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    //function __construct()
    //{
     //   $this->middleware('auth');
    //}
    function index()
    {

            $dokter = dokter::count();
            $pasien = pasien::count();
            $obat = obat::count();
            $ruang = ruang::count();
            return view ("halaman/index",compact('dokter','pasien','obat','ruang'));
        
        //$saran = DB::table('tb_saran')->get();

        //return view('admin.daftar-saran',['saran' => $saran] );
        
    }

    // Halaman Laporan
    function laporan()
    {
        return view ("halaman/laporan");
    }
}

// by->zwan06