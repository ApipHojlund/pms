@extends('layout.master')
@section('title', 'material')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($bahan->isEmpty())
                        <h4 class="text-light">tidak ada data yang ditampilkan</h4>
                        <a href="/bahan/create" class="btn btn-block btn-light">Tambahkan Data Baru</a>
                    @else
                    <div class="row">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($bahan as $item)
                        <div class="col-4">
                            <div class="card">
                            <div class="card-header">
                                {{ $no++ }}
                            </div>
                            <div class="card-body">
                                <table>
                                            <tr>
                                                <td>Kode Bahan</td>
                                                <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                                <td>{{ $item->id  }}</td> <!-- Perbaiki di sini -->
                                            </tr>
                                            <tr>
                                                <td>Nama Bahan</td>
                                                <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                                <td>{{ $item->nama  }}</td> <!-- Perbaiki di sini -->
                                            </tr>
                                            <tr>
                                                <td>Jenis Bahan</td>
                                                <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                                <td>{{ $item->jenisBahan->tipe }}</td> <!-- Perbaiki di sini -->
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                                <td>X-{{ $item->ukuran_x }} , Y-{{ $item->ukuran_y }} ,
                                                    Z-{{ $item->ukuran_z }}</td>
                                            </tr>
                                            <tr>
                                                <td>Harga</td>
                                                <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                                <td>IDR-{{ number_format($item->harga_bahan, 2, ',', '.') }}</td>
                                            </tr>
                                </table>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $bahan->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
