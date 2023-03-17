@extends('welcome')

@section('content')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Edit Data Pasien</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{'/pasien/'.$data->id}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Pasien</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" placeholder="Masukan Nama Pasien" autofocus autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control" value="{{ $data->jk }}">
                                    <option value="{{ $data->jk }}">{{ $data->jk }}</option>
                                    <option value="Laki-Laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $data->no_hp }}" placeholder="Masukan No Telepon" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}" placeholder="Masukan Alamat" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<!-- /.container-fluid -->
@endsection