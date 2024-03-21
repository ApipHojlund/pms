@extends('layout.master')
@section('title','Material')
@section('konten')
<div class="content-wrapper mt-3">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Edit Material Data <a href="/bahan" class="btn btn-primary">back</a>
                 </h4>
                    <form action="/bahan/{{$bahan->id}}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input value="{{$bahan->nama}}"
                                type="text"
                                class="form-control "
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
                                class="form-control "
                                name="harga_bahan"
                                id=""
                                placeholder="Harga Bahan"
                            />
                            @error('harga')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3 form-group-row">
                            <label for="" class="form-label">Ukuran</label>
                            <div class="input-group mb-3">
                                <input type="text" value="{{ $bahan->ukuran_x }}" name="ukuran_x" class="form-control " placeholder="Ukuran X" aria-label="Ukuran X">
                            @error('ukuran_x')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                                <input type="text" value="{{ $bahan->ukuran_y }}" name="ukuran_y" class="form-control " placeholder="Ukuran Y" aria-label="Ukuran Y">
                            @error('ukuran_y')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                                <input type="text" value="{{ $bahan->ukuran_z }}" name="ukuran_z" class="form-control " placeholder="Ukuran Z" aria-label="Ukuran Z">
                            @error('ukuran_z')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
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
                                class="form-control "
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
