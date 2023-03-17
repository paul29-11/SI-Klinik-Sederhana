@extends('welcome')

@section('content')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Edit Data Ruangan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{'/ruang/'.$data->id}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Ruangan</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" placeholder="Masukan Nama Ruangan" autofocus autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket" value="{{ $data->ket }}" placeholder="Masukan Keterangan" autocomplete="off">
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