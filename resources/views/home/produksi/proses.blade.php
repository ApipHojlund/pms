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
                            @csrf
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="row">
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
                                        <div class="col-lg-3">
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
                                        <div class="col-lg-1">
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
                                        <div class="row">
                                            <div class="col-lg-1">
                                                {{ $no++ }}
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-check align-center">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="" name="selected_item[]" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="">
                                                    {{ $item->nama_model }}
                                                </label><br>
                                                <label for="">
                                                    <a href="/pemesanan/{{ $item->id }}/detail"
                                                        class="btn btn-info gap-2">Detail</a>
                                                </label>
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
                                            <div class="col-lg-1">
                                                <label for="">
                                                    <a class="btn btn-info" href="/order/{{ $item->id }}/view-document"
                                                        target="_blank">
                                                        Lihat Dokumen
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <hr>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Machine</label>
                                        <select class="form-select form-select-md" name="id_mesin[]" id="id_mesin" multiple>
                                            @foreach ($mesin as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Petugas</label>
                                        <select class="form-select form-select-lg" name="petugas" id="">
                                            @foreach ($petugas as $pet)
                                                <option value="{{ $pet->nama }}">{{ $pet->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">profit</label>
                                        <input type="number" class="form-control text-light" name="profit" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Processing Time</label>
                                        <input type="number" class="form-control text-light" name="waktu" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                </div>
                            @endforeach
                    </div>
                    <button type="submit" class="btn d.grid btn-success">Submit</button>
                    {{-- @foreach ($pesanan as $pesanan)
                                @if ($pesanan->isEmpty())
                                @else
                                @endif
                            @endforeach --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
