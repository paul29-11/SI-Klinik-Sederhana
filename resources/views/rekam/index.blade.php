@extends('welcome')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Rekam Medis</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="my-2">
                     <a href="/rekam/create" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Data</span>
                    </a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal Periksa</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Diperiksa oleh</th>
                            <th>Diagnosa</th>
                            <th>Obat</th>
                            <th>Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal Periksa</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Diperiksa oleh</th>
                            <th>Diagnosa</th>
                            <th>Obat</th>
                            <th>Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                                <td>{{ $item->tgl_periksa }}</td>
                                <td>{{ $item->pasien->nama }}</td>
                                <td>{{ $item->keluhan }}</td>
                                <td>{{ $item->dokter->nama }}</td>
                                <td>{{ $item->diagnosa }}</td> 
                                <td>{{ $item->obat->nama }}</td>
                                <td>{{ $item->ruang->nama }}</td>
                                <td>
                                    <!-- <a class='btn btn-secondary btn-sm' href='{url( ' /dokter/'.$item->id) }}'><i class="fas fa-pen "></a> -->
                                    <a class='btn btn-warning btn-sm' href='{{ url('/rekam/'.$item->id.'/edit') }}'><i class="fas fa-pen "></i></a>
                                    <form onsubmit="return confirm ('Apakah Yakin Mau menghapus data?')" class="d-inline" action="{{ '/rekam/'.$item->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- /.container-fluid -->
@endsection