@extends('layouts.master')
@section('title','user')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <h4>Add User Data
                    <a href="/user" class="btn btn-primary">Kembali <i class="mdi mdi-arrow-left-bold"></i></a>
                </h4>
                <div class="card-body">
                    <form action="/user/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text"
                              class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="">
                          </div>
                          @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text"
                              class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
                          </div>
                          @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="" placeholder="">
                          </div>
                          @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="" rows="3"></textarea>
                          </div>
                          @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          <div class="mb-3">
                            <label for="" class="form-label">Nomor Telepon</label>
                            <input type="number"
                              class="form-control" name="no_telp" id="" aria-describedby="helpId" placeholder="">
                          </div>
                            @error('no_telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
                          <div class="mb-3">
                            <label for="" class="form-label">Level</label>
                            <select class="form-select form-select-md" name="level" id="">
                                <option selected disabled>-Select one-</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="customer">Customer</option>
                            </select>
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
