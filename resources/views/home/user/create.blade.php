@extends('layout.master')
@section('title','user')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="page-header">
                    <h3 class="page-title"> Add User Data </h3>
                  </div>
                <div class="card-body">
                    <form action="/user/tambah" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text"
                              class="form-control text-light" name="nama" id="" placeholder="nama">
                          </div>
                          @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text"
                              class="form-control text-light" name="username" id="" aria-describedby="helpId" placeholder="username">
                          </div>
                          @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control text-light" name="password" id="" placeholder="Password">
                          </div>
                          @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <textarea class="form-control text-light" name="alamat" id="" placeholder="Alamat" rows="3"></textarea>
                          </div>
                          @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          <div class="mb-3">
                            <label for="" class="form-label">Nomor Telepon</label>
                            <input type="number"
                              class="form-control text-light text-light" name="no_telp" id="" aria-describedby="helpId" placeholder="Nomor Telepon">
                          </div>
                            @error('no_telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                            <label for="" class="form-label">Masukan Foto</label>
                            <input
                                type="file"
                                class="form-control text-light"
                                name="foto"
                                id=""
                                placeholder=""
                                aria-describedby="fileHelpId"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Level</label>
                            <select required class="form-select form-select-md text-light bg-dark" name="level" id="">
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
