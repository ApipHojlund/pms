@extends('layouts.master')
@section('tittle', 'Pemesanan')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tittle">
                            Pemesanan <a href="/order/request" class="btn btn-primary">Add New Data <i
                                    class="mdi mdi-plus"></i></a>
                        </h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-hover">
                                @can('customer')
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Id</th>
                                            <th scope="col">Model Name</th>
                                            <th scope="col">Berat Produk</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Material</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($order as $u)
                                            <tr class="">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $u->id }}</td>
                                                <td>{{ $u->nama_model }}</td>
                                                <td>{{ $u->berat }}</td>
                                                <td>{{ $u->status }}</td>
                                                <td>{{ $u->Bahan->nama }}</td>
                                                <td>
                                                    <a href="/pemesanan/{{ $u->id }}/edit"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="/pemesanan/{{ $u->id }}/detail"
                                                        class="btn btn-info">detail</a>
                                                    <button class="btn btn-danger"
                                                        onclick="Delete('/pemesanan/{{ $u->id }}/hapus')">Hapus</button>
                                                    @if ($u->status == 'dalam antrian')
                                                        <a href="/pemesanan/{{ $u->id }}/execute"
                                                            class="btn btn-primary">execute</a>
                                                    @else
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endcan
                                @can('petugas')
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
                                        @foreach ($order as $d)
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
                                @endcan
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
