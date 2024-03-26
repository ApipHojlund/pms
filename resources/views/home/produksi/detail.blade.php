@extends('layout.master')
@section('title', 'Produksi')
@section('konten')
    <div class="content-wrapper mt-3">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @php
                            $no = 1;
                        @endphp
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <td colspan="2" align="center">
                                        <a href="/produksi/index" class="btn btn-primary col-lg-6">back</a>
                                    </td>
                                    <td align="center">
                                        <a target="_Blank" href="/produksi/{{ $produksi->id }}/cetak"
                                            class="btn col-lg-6 btn-success">Cetak <i class="mdi mdi-printer"></i></a>
                                    </td>
                                </tr>
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
                            @foreach ($detail as $item)
                                <div class="card-body">

                                    <td>{{ $no++ }}.</td>

                                    <table class="table table-hover">
                                        <tr>
                                            <td>Tanggal</td>
                                            <td align="left">:</td>
                                            <td>{{ $item->tanggal }}</td>
                                        </tr>
                                        <tr>
                                            <td>Note</td>
                                            <td align="left">:</td>
                                            <td>{{ $item->note }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pemesan</td>
                                            <td align="left">:</td>
                                            <td>{{ $item->Pemesan->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah produksi</td>
                                            <td align="left">:</td>
                                            <td>{{ $item->jumlah_produksi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td align="left">:</td>
                                            <td>{{ $item->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Waktu</td>
                                            <td align="left">:</td>
                                            <td>{{ $item->waktu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Petugas</td>
                                            <td align="left">:</td>
                                            <td>{{ $item->Petugas->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Detail</td>
                                            <td align="left">:</td>
                                            <td>
                                                <a href="/detail_produksi/{{ $item->id }}/detail"
                                                    class="btn btn-info d-grid">detail</a>
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
