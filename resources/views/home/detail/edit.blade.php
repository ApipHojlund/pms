@extends('layout.master')
@section('tittle', 'detail')
@section('konten')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tittle">
                            Edit Product Data <a href="/order" class="btn btn-primary">back</a>
                        </h4>
                        <form action="/detail_produksi/{{ $detail->id }}/store" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Customer</label>
                                <select required class="form-select form-select" name="id_pemesan" id="">
                                    <option value="{{ $detail->id_pemesan }}">{{ $detail->Pemesan->nama }}</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Note</label>
                                <textarea class="form-control text-light" name="note" id="" rows="3" placeholder="NOTE">{{ $detail->note }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Petugas</label>
                                <select class="form-select form-select" name="petugas" id="">
                                    <option value="{{ $detail->petugas }}">{{ $detail->Petugas->nama }}</option>
                                    @foreach ($petugas as $pet)
                                        <option value="{{ $pet->id }}">{{ $pet->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Processing Time</label>
                                <input value="{{ $detail->waktu }}" type="number" class="form-control text-light text-light"
                                    name="waktu" id="" aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jumlah Produksi</label>
                                <input value="{{ $detail->jumlah_produksi }}" type="number" class="form-control text-light text-light"
                                    name="jumlah_produksi" id="" aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select class="form-select form-select" name="status" id="">
                                    <option selected value="{{ $detail->status }}">-{{ $detail->status }}-
                                    </option>
                                    <option value="Dalam Proses">Dalam Proses</option>
                                    <option value="Ditahan">Ditahan</option>
                                    <option value="Berhenti">Berhenti</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="form-label" hidden>Id Produksi</label>
                                <input hidden class="form-control text-light"
                                 type="number" name="id_produksi" value="{{ $detail->id_produksi }}" id="">
                            </div>
                            <div class="mb-3">
                                <label hidden for="form-label" >Tanggal</label>
                                <input  class="form-control text-light"
                                 type="date" hidden name="id_produksi" value="{{ $detail->tanggal }}" id="">
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
