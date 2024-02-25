@extends('layouts.master')
@section('title','Material')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    @foreach ($bahan as $bahan)
                    <div class="col-3">
                        <div class="card-header">
                            {{$bahan->nama}}
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Jenis Bahan</td>
                                    <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                    <td>{{$bahan->JenisBahan->tipe}}</td>
                                </tr>
                                <tr>
                                    <td>Ukuran</td>
                                    <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                    <td>X-{{ $bahan->ukuran_x }} , Y-{{ $bahan->ukuran_y }} ,
                                        Z-{{ $bahan->ukuran_z }}</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                    <td>IDR-{{number_format($bahan->harga_bahan,2,',','.')}}</td>
                                </tr>
                                <tr>
                                    <td>Berat</td>
                                    <td style="padding-left: 40px;padding-right: 20px" align="right">:</td>
                                    <td>{{$bahan->berat}}Kg</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
