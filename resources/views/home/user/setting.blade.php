@extends('layout.master')
@section('title', 'user')
@section('konten')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-14 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            {{ $user->nama }} Profile
                        </h4>
                        <div class="row">
                            <div class="col-lg-4 pb-2 pt-2">
                                <center>
                                    <img src="{{ asset("image/user/$user->foto") }}" class="img img-lg-4" alt="">
                                </center>
                            </div>
                            <div class="col-lg-8">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tr>
                                            <td>Nama</td>
                                            <td align="right">:</td>
                                            <td>{{ $user->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td align="right">:</td>
                                            <td>{{ $user->username }}</td>
                                        </tr>
                                        <tr>
                                            <td>No Telp</td>
                                            <td align="right">:</td>
                                            <td>{{ $user->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <td>Level</td>
                                            <td align="right">:</td>
                                            <td>{{ $user->level }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td align="right">:</td>
                                            <td>{{ $user->alamat }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a class="btn col-lg-5 mt-2 btn-info" href="/user/{{ Auth()->User()->id }}/setting">Edit Data</a>
                        <a class="btn col-lg-5 mt-2 btn-primary" href="/user/{{ Auth()->User()->id }}/setting">Change
                            Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
