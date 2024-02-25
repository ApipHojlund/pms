@extends('layouts.master')
@section('title','Material')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Edit Material Data <a href="/bahan" class="btn btn-primary">back</a>
                 </h4>
                    <form action="/material/{{$bahan->id}}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input value="{{$bahan->nama}}"
                                type="text"
                                class="form-control"
                                name="nama"
                                id=""
                                aria-describedby="helpId"
                                placeholder="Nama Material"
                            />
                            @error('nama')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input value="{{$bahan->harga_bahan}}"
                                type="number"
                                class="form-control"
                                name="harga_bahan"
                                id=""
                                placeholder="Harga Bahan"
                            />
                            @error('harga')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ukuran</label>
                            <input value="{{$bahan->ukuran}}"
                                type="number"
                                class="form-control"
                                name="ukuran"
                                id=""
                                placeholder="Ukuran"
                            />
                            @error('ukuran')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Berat</label>
                            <input value="{{$bahan->berat}}"
                                type="number"
                                class="form-control"
                                name="berat"
                                id=""
                                placeholder="Berat"
                            />
                            @error('berat')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Material</label>
                            <select class="form-select form-select-md" name="id_jenis" id="" required>
                                    <option disabled selected value="{{$bahan->id_jenis}}">-{{$bahan->JenisBahan->tipe}}-</option>
                                @foreach ($jeniss as $jeniss)
                                    <option value="{{$jeniss->id}}">{{$jeniss->tipe}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label hidden for="" class="form-label">Choose file</label>
                            <input hidden
                                type="file"
                                class="form-control"
                                name=""
                                id=""
                                placeholder=""
                                aria-describedby="fileHelpId"
                            />
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
