@extends('layout.master')
@section('title','user')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-14 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        User Page
                    </h4>
                    @can('admin')
                    <a class="btn btn-primary float-left" href="/user/tambah">Tambah Data User <i class="mdi mdi-account-plus"></i></a>
                    @endcan
                    <div class="table-responsive">
                        <br>
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Alamat</th>
                                    @can('admin')
                                    <th>Aksi</th>
                                    @endcan
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
                                    <td>
                                        <img src="{{asset("image/user/$u->foto")}}" alt="">
                                    </td>
                                    <td>{{$u->nama}}</td>
                                    <td>{{$u->username}}</td>
                                    <td>{{$u->level}}</td>
                                    <td>{{$u->no_telp}}</td>
                                    <td>{{$u->alamat}}</td>
                                    @can('admin')
                                    <td>
                                        <a href="/user/{{$u->id}}/ubah" class="btn btn-warning">Edit</a>
                                        <button class="btn btn-danger" onclick="Delete('/user/{{$u->id}}/delete')">Hapus</button>
                                    </td>
                                    @endcan
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
