@extends('layout.master')
@section('title', 'detail')
@section('konten')
    <div class="content-wrapper mt-3">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tittle">
                            Detail Produksi
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <div class="d-flex align-items-center align-self-start">
                                                        <h3 class="mb-0 text-dark">{{ $dalam_proses }}</h3>
                                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="icon icon-box-primary ">
                                                        <span
                                                            class="mdi mdi-airplane-takeoff text-primary item-icon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-primary font-weight-normal">Model Dalam Proses</h6>
                                            <a href="/detail_produksi/dalam_proses"
                                                class="btn d-grid btn-outline-primary mt-3">Check Data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <div class="d-flex align-items-center align-self-start">
                                                        <h3 class="mb-0 text-dark">{{ $berhenti }}</h3>
                                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="icon icon-box-danger">
                                                        <span
                                                            class="mdi mdi-stop-circle-outline icon-item text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-danger font-weight-normal">Model Berhenti Produksi </h6>
                                            <a href="/detail_produksi/berhenti"
                                                class="btn d-grid btn-outline-danger mt-3">Check Data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <div class="d-flex align-items-center align-self-start">
                                                        <h3 class="mb-0 text-dark">{{ $ditahan }}</h3>
                                                        <p class="text-danger ms-2 mb-0 font-weight-medium"></p>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="icon icon-box-warning">
                                                        <span
                                                            class="mdi text-warning mdi-pause-circle-outline icon-item"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-warning font-weight-normal">Model Produksi Ditahan</h6>
                                            <a href="/detail_produksi/tertunda"
                                                class="btn d-grid btn-outline-warning mt-3">Check Data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <div class="d-flex align-items-center align-self-start">
                                                        <h3 class="mb-0 text-dark">{{ $selesai }}</h3>
                                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="icon icon-box-success ">
                                                        <span
                                                            class="mdi mdi-checkbox-marked-circle icon-item text-success"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-success font-weight-normal">Model Selesai</h6>
                                            <a href="/detail_produksi/selesai"
                                                class="btn d-grid btn-outline-success mt-3">Check Data</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/detail_produksi/pilih_model" class="btn btn-primary mb-3">Add New Data <i
                                    class="mdi mdi-plus"></i></a>
                        </h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Model QTY</th>
                                        <th scope="col">Production Code</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($detail as $d)
                                        <tr class="">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $d->id }}</td>
                                            <td>{{ $d->status }}</td>
                                            <td>{{ $d->jumlah_produksi }}</td>
                                            <td>{{ $d->id_produksi }}</td>
                                            <td>
                                                <a href="/detail_produksi/{{ $d->id }}/edit"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="/detail_produksi/{{ $d->id }}/detail"
                                                    class="btn btn-info">detail</a>
                                                <button class="btn btn-danger"
                                                    onclick="Delete('/detail/{{ $d->id }}/hapus')">Hapus</button>
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
