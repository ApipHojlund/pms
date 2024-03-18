@extends('layout.master')
@section('title', 'pemesanan')
@section('konten')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        Proses Pesanan
                    </div>
                    @php
                        $no = 1;
                    @endphp
                    <div class="card-body">
                        <form action="/pesanan/proses" method="post">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="row icons-list">
                                        <div class="col-lg-1">
                                            <label for="">
                                                No
                                            </label>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-check">
                                                Select
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">
                                                Nama Model
                                            </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">
                                                Pemesan
                                            </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">
                                                Jumlah Produksi
                                            </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">
                                                Material
                                            </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">
                                                File
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($order as $item)
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="row icons-list">
                                            <div class="col-lg-1">
                                                {{ $no++ }}
                                            </div>
                                            <div class="col-lg-1">
                                                {{-- <div class="form-check align-left"> --}}
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $item->id }}" id="" name="selected_item[]" />
                                                {{-- </div> --}}
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <label for="">
                                                            {{ $item->nama_model }}
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <label for="">
                                                            <a href="/pemesanan/{{ $item->id }}/detail"
                                                                class="btn btn-info btn-md-2">Detail</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">
                                                    {{ $item->Pemesan->nama }}
                                                </label>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">
                                                    {{ $item->jumlah }}
                                                </label>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">
                                                    {{ $item->Bahan->nama }}
                                                </label>
                                            </div>
                                            <div class="col-lg-2">
                                                <label for="">
                                                    <a class="btn btn-info mt-3"
                                                        href="/order/{{ $item->id }}/view-document" target="_blank">
                                                        Lihat Dokumen
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12">
                                <hr>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Machine</label>
                                    <select required multiple class="js-example-basic-multiple form-control" name="id_mesin[]"
                                        id="id_mesin" multiple>
                                        @foreach ($mesin as $item)
                                            <option class="" value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Petugas</label>
                                    <select required class="form-select form-select " name="petugas"
                                        id="">
                                        @foreach ($petugas as $pet)
                                            <option value="{{ $pet->nama }}">{{ $pet->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">profit</label>
                                    <input required type="number" class="form-control " name="profit"
                                        id="" aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Processing Time</label>
                                    <input required type="number" class="form-control " name="waktu"
                                        id="" aria-describedby="helpId" placeholder="" />
                                </div>
                            </div>

                    </div>
                    <button type="submit" class="btn d.grid btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
