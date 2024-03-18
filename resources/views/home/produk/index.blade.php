@extends('layout.master')
@section('title', 'Produk')
@section('konten')
    <div class="content-wrapper">
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
                                            <a href="/pemesanan/{{$pro->id}}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/pemesanan/{{$pro->id}}/detail" class="btn btn-info">detail</a>
                                            <button class="btn btn-danger" onclick="Delete('/pemesanan/{{$pro->id}}/hapus')">Hapus</button>
                                            @if ($pro->status == 'dalam antrian')
                                                <a href="/pemesanan/{{$pro->id}}/execute" class="btn btn-primary">execute</a>
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
    </div>
@endsection
