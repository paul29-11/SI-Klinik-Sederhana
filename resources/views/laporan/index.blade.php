@extends('welcome')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laporan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Rekam Medis</h6>
        </div>
        <div class="card-body">
            <!-- <form action="/laporan" method="POST" role="form" enctype="multipart/form-data"> -->
                
                <div class="row">
                    <div class="col">
                        <label>Tanggal Awal</label>
                        <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" value="" placeholder="Masukan Tanggal Pemeriksaan" autofocus autocomplete="off">
                    </div>
                    <div class="col">
                        <label>Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value="" placeholder="Masukan Tanggal Pemeriksaan" autofocus autocomplete="off">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <a href="" onclick="this.href='/cetak/'+document.getElementById('tgl_awal').value+'/'+document.getElementById('tgl_akhir').value" target="_blank" name="print" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan Rekam Medis</a>
                    <!-- <button type="submit" name="print" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan Rekam Medis</button> -->
                </div>
            <!-- </form> -->
        </div>
    </div>

<!-- /.container-fluid -->
@endsection