@extends('welcome')

@section('content')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Dokter</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="/dokter" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ Session::get('nama') }}" placeholder="Masukan Nama Dokter" autofocus autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input type="text" class="form-control" id="spesialis" name="spesialis" value="{{ Session::get('spesialis') }}" placeholder="Masukan Spesialis Dokter" autofocus autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ Session::get('no_hp') }}" placeholder="Masukan No Telepon" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ Session::get('alamat') }}" placeholder="Masukan Alamat" autocomplete="off">
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