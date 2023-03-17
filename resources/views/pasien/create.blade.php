@extends('welcome')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Pasien</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="/pasien" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Pasien</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ Session::get('nama') }}" placeholder="Masukan Nama Pasien" autofocus autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control" value="{{ Session::get('jk') }}">
                                    <option value="">- Pilih -</option>
                                    <option value="Laki-Laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
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
</div>


<!-- /.container-fluid -->
@endsection