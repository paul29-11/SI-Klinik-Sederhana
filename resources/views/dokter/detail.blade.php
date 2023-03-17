@extends('welcome')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dokter</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="my-2">
                     <a href='/dokter' class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                </div>
                    <h1>{{ $data->nama }}</h1>
                <div>

                </div>
            </div>
        </div>
    </div>

<!-- /.container-fluid -->
@endsection