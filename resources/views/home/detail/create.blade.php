@extends('layout.master')
@section('title', 'detail')
@section('konten')
    <div class="content-wrapper mt-3">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tittle">
                            Request A Product <a href="/order" class="btn btn-primary">back</a>
                        </h4>
                        <form action="/detail/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" hidden class="form-label">Name Module</label>
                                <input value="{{ $order->nama_model }}" hidden type="text" class="form-control"
                                    name="nama_model" id="" aria-describedby="helpId" placeholder="" />
                                <input value="{{ $order->id }}" hidden type="text" class="form-control"
                                    name="id_pesanan" id="" aria-describedby="helpId" placeholder="" />
                                <input hidden value="{{ $order->model }}" type="text" class="form-control" name="model"
                                    id="" placeholder="" aria-describedby="fileHelpId" />
                            </div>
                            <div class="mb-3">
                                <label for="" hidden class="form-label">Material</label>
                                <select hidden required class="form-select form-select-lg" name="id_bahan" id="">
                                    <option value="{{ $order->id_bahan }}">{{ $order->Bahan->nama }}</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" hidden class="form-label">Customer</label>
                                <select required hidden class="form-select form-select-lg" name="id_pemesan" id="">
                                    <option value="{{ $order->id_pemesan }}">{{ $order->Pemesan->nama }}</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" hidden class="form-label"></label>
                                <textarea class="form-control" hidden name="note" id="" rows="3" placeholder="NOTE">{{ $order->note }}</textarea>
                            </div>
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
                                <input type="number" class="form-control " name="profit" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Processing Time</label>
                                <input type="number" class="form-control " name="waktu" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label hidden for="" class="form-label">Berat</label>
                                <input hidden value="{{ $order->berat }}" type="number" class="form-control"
                                    name="berat" id="" aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label hidden for="" class="form-label">Jumlah Produksi</label>
                                <input value="{{ $order->jumlah }}" hidden type="number"
                                    class="form-control " name="jumlah_produksi" id=""
                                    aria-describedby="helpId" placeholder="" />
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
