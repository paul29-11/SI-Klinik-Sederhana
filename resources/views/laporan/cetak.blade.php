<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cetak laporan Rekam Medis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <style>
    @page { size: A4 }
  
    h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }
  
    table {
        border-collapse: collapse;
        width: 100%;
    }
  
    .table th {
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
  
    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
    }
  
    .text-center {
        text-align: center;
    }
</style>
</head>
<body class="A4">
    <section class="sheet padding-10mm">
        <h1>Laporan Rekam Medis</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal Periksa</th>
                    <th>Nama Pasien</th>
                    <th>Keluhan</th>
                    <th>Diperiksa oleh</th>
                    <th>Diagnosa</th>
                    <th>Obat</th>
                    <th>Ruangan</th>
                </tr>
            </thead>
            
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>