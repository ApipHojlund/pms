@extends('layout.master')
@section('title','mesin')
@section('konten')
<div class="content-wrapper mt-3">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <h4>Edit Machine Data
                    <a href="/produk" class="btn btn-primary">Kembali <i class="mdi mdi-arrow-left-bold"></i></a>
                </h4>
                <div class="card-body">
                    <form action="/produk/{{ $produk->id }}/update" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input  value="{{ $produk->nama_model }}"
                                type="text"
                                class="form-control form-md"
                                name="nama_model"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mesin</label>
                            <select
                                class="form-select form-select"
                                name="id_mesin"
                                id=""
                            >
                            <option selected value="{{ $produk->id_mesin }}"><b>-{{ $produk->Mesin->nama }}-</b></option>
                                @foreach ($mesin as $mes)
                                    <option value="{{ $mes->id }}">{{ $mes->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Bahan / Material</label>
                            <select
                                class="form-select form-select"
                                name="id_bahan"
                                id=""
                            >
                            <option selected value="{{ $produk->id_bahan }}"><b>-{{ $produk->Bahan->nama }}-</b></option>
                                @foreach ($bahan as $b)
                                    <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Berat Material Dibutuhkan</label>
                            <input  value="{{ $produk->berat }}"
                                type="number"
                                class="form-control form-md"
                                name="berat"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Profit</label>
                            <input  value="{{ $produk->profit }}"
                                type="number"
                                class="form-control form-md"
                                name="profit"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
