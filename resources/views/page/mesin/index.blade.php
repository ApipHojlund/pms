@extends('layouts.master')
@section('title', 'Machine')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            Machine Page
                        </h4>
                        @can('admin')
                        <a class="btn btn-primary float-left" href="/machine/create">Tambah Data mesin <i class="mdi mdi-account-plus"></i></a>
                        @endcan
                        <div class="table-responsive">
                            <br>
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Mesin</th>
                                        <th scope="col">Harga Asli</th>
                                        <th scope="col">Harga Buku</th>
                                        <th scope="col">Biaya Mesin Per Jam</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($mesin as $m)
                                        <tr class="">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $m->id }}</td>
                                            <td>{{ $m->nama }}</td>
                                            <td>{{ $m->jenis_mesin }}</td>
                                            <td>{{ number_format($m->harga_asli, 2, ',', '.') }}</td>
                                            <td>{{ number_format($m->harga_buku, 2, ',', '.') }}</td>
                                            <td>{{ number_format($m->pembulatan_biaya, 2, ',', '.') }}</td>
                                            <td>
                                                @can('admin')
                                                <a href="/machine/{{ $m->id }}/edit" class="btn btn-warning">Edit</a>
                                                @endcan
                                                <a href="/machine/{{ $m->id }}/detail" class="btn btn-info">Detail</a>
                                                @can('admin')
                                                <button class="btn btn-danger"
                                                onclick="Delete('/machine/{{ $m->id }}/hapus')">Hapus</button>
                                                @endcan
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
