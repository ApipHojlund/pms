@extends('layouts.master')
@section('title','Produksi')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Production Page <br>
                    <a class="btn btn-primary" href="/production/create">tambah data +</a>
                 </h4>
                 <div class="table-responsive">
                    <br>
                    <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id</th>
                                <th scope="col">Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($produksi as $u)
                            <tr class="">
                                <td>{{$no++}}</td>
                                <td>{{$u->id}}</td>
                                <td>{{$u->keterangan}}</td>
                                <td>
                                    <button type="button" class="btn btn-info" onclick="showUpdateModal({{ $u->id }})">
                                        Update Data
                                    </button>
                                    <a href="/production/{{$u->id}}/detail" class="btn btn-primary">Detail</a>
                                    <a href="/production/{{$u->id}}/cetak" class="btn btn-primary">cetak <i class="mdi mdi-printer"></i></a>
                                    <button class="btn btn-danger" onclick="Delete('/produksi/{{$u->id}}/hapus')">Hapus</button>
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
