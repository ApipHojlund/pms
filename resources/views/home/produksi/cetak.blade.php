<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4>Pemesan : {{ $detail->Pemesan->nama }}</h4>
    <table border="2" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Note</th>
                <th>Nama Model</th>
                <th>Material</th>
                <th>Berat</th>
                <th>Harga Material</th>
                <th>Mesin</th>
                <th>Waktu Pengerjaan</th>
                <th>Harga/Jam</th>
                <th>Biaya Mesin</th>
                <th>Jumlah Produksi</th>
                {{-- <th>Harga Proses</th> --}}
                {{-- <th>Harga Produk</th> --}}
                <th>Profit</th>
                <th>Harga Satuan</th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $item['note'] }}</td>
                    <td>{{ $item['nama_model'] }}</td>
                    <td>{{ $item['material'] }}</td>
                    <td>{{ $item['berat'] }}</td>
                    <td>{{ $item['harga_material'] }}</td>
                    <td>{{ $item['mesin'] }}</td>
                    <td>{{ $item['waktu_pengerjaan'] }}</td>
                    <td>{{ $item['harga_jam'] }}</td>
                    <td>{{ $item['biaya_mesin'] }}</td>
                    <td>{{ $item['jumlah_produksi'] }}</td>
                    {{-- <td>{{ $item['harga_proses'] }}</td> --}}
                    <td>{{ $item['profit'] }}</td>
                    <td>{{ $item['harga_produk'] }}</td>
                    {{-- <td>{{ $item['harga_satuan'] }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
