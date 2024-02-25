@extends('layout.master')
@section('title','Produksi')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    <a href="/produksi" class="btn btn-primary">back</a>
                 </h4>

                 @php
                                $no = 1;
                            @endphp
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td>Kode Produksi</td>
                                <td>:</td>
                                <td>{{ $produksi->id }}</td>
                            </tr>
                            <tr>
                                <td>Kode Produksi</td>
                                <td>:</td>
                                <td>{{ $produksi->keterangan }}</td>
                            </tr>
                        </table>
                        @foreach ($detail as $detail)
                        <div class="card-body">

                            <td>{{ $no++ }}</td>

                        <table class="table table-hover">
                            <tr>
                                <td>Models Name</td>
                                <td align="left">:</td>
                                <td>{{ $detail->nama_model }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td align="left">:</td>
                                <td>{{ $detail->status }}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td align="left">:</td>
                                <td>{{ $detail->tanggal }}</td>
                            </tr>
                            <tr>
                                <td>Note</td>
                                <td align="left">:</td>
                                <td>{{ $detail->note }}</td>
                            </tr>
                            <tr>
                                <td>Customer</td>
                                <td align="left">:</td>
                                <td>{{ $detail->Pemesan->nama }}</td>
                            </tr>
                            <tr>
                                <td>Product Qty</td>
                                <td align="left">:</td>
                                <td>{{ $detail->jumlah_produksi }}</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td align="left">:</td>
                                <td>{{ $detail->Bahan->nama }}</td>
                            </tr>
                            <tr>
                                <td>Petugas</td>
                                <td align="left">:</td>
                                <td>{{ $detail->petugas }}</td>
                            </tr>
                            <tr>
                                <td>Waktu Pengerjaan</td>
                                <td align="left">:</td>
                                <td>{{ $detail->waktu }}</td>
                            </tr>
                            <tr>
                                <td>Profit</td>
                                <td align="left">:</td>
                                <td>{{ $detail->profit }}%</td>
                            </tr>
                            <tr>
                                <td>Mesin</td>
                                <td align="left">:</td>
                                <td>{{ $detail->Mesin->nama }}</td>
                            </tr>
                            <tr>
                                <td>Kode Produksi</td>
                                <td align="left">:</td>
                                <td>{{ $detail->id_produksi }}</td>
                            </tr>
                            <tr>
                                <td>Harga Jual Satuan</td>
                                <td align="left">:</td>
                                <td>{{ number_format($detail->harga_jual,2,',','.') }}</td>
                            </tr>
                            <tr>
                                <td>Model   </td>
                                <td align="left">:</td>
                                <td>
                                    <a href="/order/{{ $detail->id }}/view-document" target="_blank">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
