@extends('welcome')

@section('content')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Rekam Medis</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="/rekam" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tanggal Pemeriksaan</label>
                            <input type="date" class="form-control" id="tgl_periksa" name="tgl_periksa" value="{{ Session::get('nama') }}" placeholder="Masukan Tanggal Pemeriksaan" autofocus autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Nama Pasien</label>
                                <select name="pasien_id" class="form-control" value="{{ Session::get('pasien_id') }}">
                                    
                                    <option value="">- Pilih -</option>
                                    @foreach ($pasien as $pas)
                                    <option value="{{ $pas->id }}">{{$pas->nama}}</option>
                                    @endforeach
                                </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Keluhan</label>
                            <input type="text" class="form-control" id="keluhan" name="keluhan" value="{{ Session::get('spesialis') }}" placeholder="Masukan Keluhan Pasien" autofocus autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Diperiksa Oleh</label>
                                <select name="dokter_id" class="form-control" value="{{ Session::get('dokter_id') }}">
                                    
                                    <option value="">- Pilih -</option>
                                    @foreach ($dokter as $dok)
                                    <option value="{{ $dok->id }}">{{$dok->nama}} ----- {{$dok->spesialis}}</option>
                                    @endforeach
                                </select>
                        </div>

                        
                        <div class="form-group">
                            <label>Diagnosa</label>
                            <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="{{ Session::get('alamat') }}" placeholder="Masukan Diagnosa Dokter" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Obat</label>
                                <select name="obat_id" class="form-control" value="{{ Session::get('obat_id') }}">
                                    
                                    <option value="">- Pilih -</option>
                                    @foreach ($obat as $ob)
                                    <option value="{{ $ob->id }}">{{$ob->nama}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group">
                            <label>Ruangan</label>
                                <select name="ruang_id" class="form-control" value="{{ Session::get('ruang_id') }}">
                                    
                                    <option value="">- Pilih -</option>
                                    @foreach ($ruang as $rua)
                                    <option value="{{ $rua->id }}">{{$rua->nama}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<!-- /.container-fluid -->
@endsection