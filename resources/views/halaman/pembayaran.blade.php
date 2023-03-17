@extends('welcome')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pembayaran</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="my-2">
                     <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Data</span>
                    </a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Jumlah Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Jumlah Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Ucup</td>
                            <td>Rp. 3,000,000</td>
                            <td>Kaamar ruang inap 3 hari</td>
                            <td>Unpaid</td>
                            <td>Edit - Hapus - Lihat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- /.container-fluid -->
@endsection