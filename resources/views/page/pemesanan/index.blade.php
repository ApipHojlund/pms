@extends('layouts.master')
@section('tittle','Pemesanan')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Pemesanan <a href="/order/request" class="btn btn-primary">Add New Data <i class="mdi mdi-plus"></i></a>
                 </h4>
                 <div class="table-responsive">
                    <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id</th>
                                <th scope="col">Model Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Model QTY</th>
                                <th scope="col">Material</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($order as $u)
                            <tr class="">
                                <td>{{$no++}}</td>
                                <td>{{$u->id}}</td>
                                <td>{{$u->nama_model}}</td>
                                <td>{{$u->status}}</td>
                                <td>{{$u->jumlah}}</td>
                                <td>{{$u->Bahan->nama}}</td>
                                <td>
                                    <a href="/order/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/order/{{$u->id}}/detail" class="btn btn-info">detail</a>
                                    <button class="btn btn-danger" onclick="Delete('/order/{{$u->id}}/hapus')">Hapus</button>
                                    @if ($u->status == 'dalam antrian')
                                        <a href="/order/{{$u->id}}/execute" class="btn btn-primary">execute</a>
                                    @else

                                    @endif
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
