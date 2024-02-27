@extends('layouts.master')
@section('title','Produksi')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Production Page
                    {{-- <a href="//create">tambah data +</a> --}}
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
                                    <a href="/production/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger" onclick="Delete('/production/{{$u->id}}/hapus')">Hapus</button>
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
