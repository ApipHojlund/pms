@extends('layout.master')
@section('title','detail')
@section('konten')
<div class="content-wrapper mt-3">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Detail Produksi
                    {{-- <a href="/detail/request" class="btn btn-primary">Add New Data <i class="mdi mdi-plus"></i></a> --}}
                 </h4>
                 <div class="table-responsive">
                    <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id</th>
                                {{-- <th scope="col">Model Name</th> --}}
                                <th scope="col">Status</th>
                                <th scope="col">Model QTY</th>
                                {{-- <th scope="col">Material</th> --}}
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
                                <td>{{$no++}}</td>
                                <td>{{$d->id}}</td>
                                <td>{{$d->status}}</td>
                                <td>{{$d->jumlah_produksi}}</td>
                                <td>{{$d->id_produksi}}</td>
                                <td>
                                    <a href="/detail_produksi/{{$d->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/detail_produksi/{{$d->id}}/detail" class="btn btn-info">detail</a>
                                    <button class="btn btn-danger" onclick="Delete('/detail/{{$d->id}}/hapus')">Hapus</button>
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
