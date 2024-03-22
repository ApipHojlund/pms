@extends('layouts.master')
@section('title','Material')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Material Page
                 </h4>
                 @can('admin')
                 <a class="btn btn-primary" href="/material/create">tambah data +</a>
                 @endcan
                 <div class="table-responsive">
                    <br>
                    <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" rowspan="2">No</th>
                                <th scope="col" rowspan="2">Id</th>
                                <th scope="col" rowspan="2">Nama</th>
                                <th scope="col" colspan="3">ukuran</th>
                                {{-- <th scope="col" rowspan="2">berat</th> --}}
                                <th scope="col" rowspan="2">harga</th>
                                <th scope="col" rowspan="2">jenis</th>
                                @can('admin')
                                <th rowspan="2">Aksi</th>
                                @endcan
                            </tr>
                            <tr>
                                <th>X</th>
                                <th>Y</th>
                                <th>Z</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($bahan as $bahan)
                            <tr class="">
                                <td>{{$no++}}</td>
                                <td>{{$bahan->id}}</td>
                                <td>{{$bahan->nama}}</td>
                                <td>{{$bahan->ukuran_x}}</td>
                                <td>{{$bahan->ukuran_y}}</td>
                                <td>{{$bahan->ukuran_z}}</td>
                                {{-- <td>{{$bahan->berat}}</td> --}}
                                <td>IDR-{{number_format($bahan->harga_bahan,2,',','.')}}</td>
                                <td>{{$bahan->JenisBahan->tipe}}</td>
                                @can('admin')
                                <td>
                                    <a href="/material/{{$bahan->id}}/edit" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger" onclick="Delete('/material/{{$bahan->id}}/hapus')">Hapus</button>
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
