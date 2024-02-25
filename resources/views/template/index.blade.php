@extends('layouts.master')
@section('tittle','judul')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Judul Halaman <a href="//create">tambah data +</a>
                 </h4>
                 <div class="table-responsive">
                    <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($user as $u)
                            <tr class="">
                                <td>{{$no++}}</td>
                                <td>{{$u->id}}</td>
                                <td>{{$u->nama}}</td>
                                <td>{{$u->username}}</td>
                                <td>
                                    <a href="/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger" onclick="Delete('/user/{{$u->id}}/hapus')">Hapus</button>
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