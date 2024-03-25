@extends('layout.master')
@section('title', 'Produksi')
@section('konten')
    <div class="content-wrapper mt-3">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
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
                                    <center><a href="/detail_produksi" class="mt-3 btn btn-danger">Halaman Produk <i
                                                class="mdi mdi-arrow-right"></i></a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
