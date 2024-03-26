@extends('layout.master')
@section('title', 'Produk')
@section('konten')
    <div class="content-wrapper mt-3">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tittle">
                            Produk <a href="/pemesanan/request" class="btn btn-primary">Add New Data <i
                                    class="mdi mdi-plus"></i></a>
                        </h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Model Name</th>
                                        <th scope="col">Berat Produk</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Kode Produksi</th>
                                        <th scope="col">Material</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($produk as $pro)
                                    <tr class="">
                                        <td>{{$no++}}</td>
                                        <td>{{$pro->id}}</td>
                                        <td>{{$pro->nama_model}}</td>
                                        <td>{{$pro->berat}}</td>
                                        <td>{{$pro->Detail->status}}</td>
                                        <td>{{$pro->Bahan->nama}}</td>
                                        <td>{{$pro->Detail->Produksi->id}}</td>
                                        <td>
                                            <a href="/produk/{{$pro->id}}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/produk/{{$pro->id}}/detail" class="btn btn-info">detail</a>
                                            <button class="btn btn-danger" onclick="Delete('/produk/{{$pro->id}}/hapus')">Hapus</button>
                                            @if ($pro->status == 'dalam antrian')
                                                <a href="/produk/{{$pro->id}}/execute" class="btn btn-primary">execute</a>
                                            @else

                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="card col-lg-3 mt-3">
                            <div class="card-header">
                                <center>
                                    <h2 class="card-header text-primary">PRODUKSI</h2>
                                </center>
                            </div>
                            <div class="card-body bg-light">
                                <center><span class="mdi mdi-dropbox icon-lg text-primary"></span></center>
                                <center><a href="/produksi/index" class="mt-3 btn btn-primary">Halaman Produksi <i
                                            class="mdi mdi-arrow-right"></i></a></center>
                            </div>
                        </div>
                        <div class="card col-lg-3 mt-3">
                            <div class="card-header">
                                <center>
                                    <h2 class="card-header text-success">DETAIL PRODUKSI</h2>
                                </center>
                            </div>
                            <div class="card-body bg-light">
                                <center><span class="mdi mdi-magnify icon-lg text-success"></span></center>
                                <center><a href="/detail_produksi" class="mt-3 btn btn-success">Halaman Detail Produksi
                                        <i class="mdi mdi-arrow-right"></i></a></center>
                            </div>
                        </div>
                        <div class="card col-lg-3 mt-3">
                            <div class="card-header">
                                <center>
                                    <h2 class="card-header text-danger">Produk</h2>
                                </center>
                            </div>
                            <div class="card-body bg-light">
                                <center><span class="mdi mdi-codepen icon-lg text-danger"></span></center>
                                <center><a href="/produk" class="mt-3 btn btn-danger">Halaman Produk <i
                                            class="mdi mdi-arrow-right"></i></a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
