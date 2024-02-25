@extends('layouts.master')
@section('title','Machine')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-header"> {{$mesin->nama}} </h4>
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-xl-0">
                            <table class="table table-hover">
                            <tr>
                                <th>1</th>
                                <td>Nama Mesin</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->nama}}</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jenis Mesin</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->jenis_mesin}}</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Harga Asli</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($mesin->harga_asli,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Harga Buku</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($mesin->harga_buku,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>Tanggal Beli</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->tgl_beli}}</td>
                            </tr>
                            <tr>
                                <th>6</th>
                                <td>Umur</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->umur}}</td>
                            </tr>
                            <tr>
                                <th>7</th>
                                <td>inflansi</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->inflansi}}%</td>
                            </tr>
                            <tr>
                                <th>8</th>
                                <td>Nilai Yang Akan Datang</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($nilai_otw,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>9</th>
                                <td>Penggunaan Jam/Bulan</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->jam_bln}}</td>
                            </tr>
                            <tr>
                                <th>10</th>
                                <td>Penggunaan Jam/Tahun</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$jam_thn}}</td>
                            </tr>
                            <tr>
                                <th>11</th>
                                <td>Total Waktu Penggunaan (Jam)</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$total_jam}}</td>
                            </tr>
                            <tr>
                                <th>12</th>
                                <td>Kebutuhan Ruang</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->kebutuhan_ruang}}</td>
                            </tr>
                        </table>
                        </div>
                        <div class="col-lg-6 mb-4 mb-xl-0">
                            <table class="table table-hover">
                            <tr>
                                <th>13</th>
                                <td>Biaya Ruang</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($mesin->by_ruang,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>14</th>
                                <td>Daya Mesin</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">{{$mesin->daya_mesin}}</td>
                            </tr>
                            <tr>
                                <th>15</th>
                                <td>Biaya Listrik</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($mesin->biaya_listrik,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>16</th>
                                <td>Despresiasi</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($deprisiasi,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>17</th>
                                <td>Biaya Perawatan</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($perawatan,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>18</th>
                                <td>Bunga</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">
                                    @if ($bunga < 0)
                                        -
                                    @else
                                        {{$bunga}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>19</th>
                                <td>Biaya Ruang fix</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($ruang,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>20</th>
                                <td>Biaya Listrik</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($biaya_listrik,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>21</th>
                                <td>Biaya Overhead Dan Lain-Lain</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($biaya_lain,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>22</th>
                                <td>Biaya Operator</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($mesin->biaya_operator,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>23</th>
                                <td>Total Biaya</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($mesin->total_biaya,2,',','.')}}</td>
                            </tr>
                            <tr>
                                <th>24</th>
                                <td>Pembulatan Total Biaya</td>
                                <td align="center" style="padding-left: 40px">:</td>
                                <td align="right">IDR-{{number_format($mesin->pembulatan_biaya,2,',','.')}}</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
