@extends('layout.master')
@section('title','User')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Edit User Data <a href="/user/all" class="btn btn-primary">back</a>
                 </h4>
                 <form action="/user/{{$user->id}}/edit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" value="{{$user->nama}}"
                          class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" value="{{$user->username}}"
                          class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="" rows="3">{{$user->alamat}}</textarea>
                      </div>
                      @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      <div class="mb-3">
                        <label for="" class="form-label">Nomor Telepon</label>
                        <input type="number" value="{{$user->no_telp}}"
                          class="form-control" name="no_telp" id="" aria-describedby="helpId" placeholder="">
                      </div>
                        @error('no_telp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      <div class="mb-3">
                        <label for="" class="form-label">Level</label>
                        <select class="form-select form-select-md" name="level" id="">
                            <option value="{{$user->level}}">-{{$user->level}}-</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                            <option value="customer">Customer</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Masukan Foto</label>
                        <input
                            type="file"
                            class="form-control"
                            name="foto"
                            id=""
                            placeholder=""
                            aria-describedby="fileHelpId"
                        />
                      </div>

                      <button type="submit" class="btn btn-lg btn-success"><b>SUBMIT</b></button>
                      <button type="reset" class="btn btn-lg btn-warning"><b>RESET</b></button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
