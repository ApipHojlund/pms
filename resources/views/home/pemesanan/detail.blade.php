@extends('layout.master')
@section('title','Pemesanan')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    <a href="/order" class="btn btn-primary">back</a>
                 </h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td>Models Name</td>
                                <td align="left">:</td>
                                <td>{{ $order->nama_model }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td align="left">:</td>
                                <td>{{ $order->status }}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td align="left">:</td>
                                <td>{{ $order->tanggal }}</td>
                            </tr>
                            <tr>
                                <td>Note</td>
                                <td align="left">:</td>
                                <td>{{ $order->note }}</td>
                            </tr>
                            <tr>
                                <td>Customer</td>
                                <td align="left">:</td>
                                <td>{{ $order->Pemesan->nama }}</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td align="left">:</td>
                                <td>{{ $order->Bahan->nama }}</td>
                            </tr>
                            <tr>
                                <td>Berat material Dibutuhkan</td>
                                <td align="left">:</td>
                                <td>{{ $order->berat }}</td>
                            </tr>
                            <tr>
                                <td>Model   </td>
                                <td align="left">:</td>
                                <td>
                                    <a href="/order/{{ $order->id }}/view-document" target="_blank">
                                        Lihat Dokumen
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
