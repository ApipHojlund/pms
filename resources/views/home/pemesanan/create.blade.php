@extends('layout.master')
@section('title','pemesanan')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Request A Product <a href="/pemesanan" class="btn btn-primary">back</a>
                 </h4>
                    <form action="/pemesanan/store" method="post" enctype="multipart/form-data">
                        @if(session('errors'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach(session('errors')->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Model</label>
                            <input
                                type="text"
                                class="form-control "
                                name="nama_model"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            /> <br>
                            <input
                                type="file"
                                class="form-control "
                                name="model"
                                id=""
                                placeholder=""
                                aria-describedby="fileHelpId"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Berat Bahan Dibutuhkan / Model</label>
                            <input
                                type="number"
                                class="form-control "
                                name="berat"
                                id=""
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jumlah Produksi</label>
                            <input
                                type="number"
                                class="form-control "
                                name="jumlah"
                                id=""
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Material</label>
                            <select required class="form-select form-select-md  " name="id_bahan" id="">
                                @foreach ($bahan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Customer</label>
                            <select required class="form-select form-select-md  " name="id_pemesan" id="">
                                @foreach ($user as $pemesan)
                                    <option value="{{ $pemesan->id }}">{{ $pemesan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <textarea class="form-control " name="note" id="" rows="3" placeholder="NOTE"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
