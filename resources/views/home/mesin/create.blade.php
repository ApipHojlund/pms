@extends('layout.master')
@section('title','mesin')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <h4>
                  <a href="/mesin" class="btn btn-primary">Kembali <i class="mdi mdi-arrow-left-bold"></i></a>
                  Add Machine Data
                </h4>
                <div class="card-body">
                    <form action="/mesin/store" method="post">
                        @csrf
                        {{-- 1 Nama Mesin --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text"
                              class="form-control text-light" name="nama" id="" aria-describedby="helpId" placeholder="">
                              @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                          {{-- 2 Jenis Mesin --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Mesin</label>
                            <input type="text"
                              class="form-control text-light" name="jenis_mesin" id="" aria-describedby="helpId" placeholder="">
                              @error('jenis_mesin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                          {{-- 3 tanggal beli --}}
                            <div class="mb-3">
                              <label for="" class="form-label">Tanggal Beli</label>
                              <input type="date"
                                class="form-control text-light" name="tgl_beli" id="" aria-describedby="helpId" placeholder="">
                                @error('tgl_beli')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                            </div>
                            {{-- 4 harga alsi --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Harga Asli</label>
                            <input type="number"
                              class="form-control text-light" name="harga_asli" id="" aria-describedby="helpId" placeholder="">
                              @error('harga_asli')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{-- 5 Umur --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Umur</label>
                            <input type="number"
                              class="form-control text-light" name="umur" id="" aria-describedby="helpId" placeholder="">
                              @error('umur')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{-- 6 Inflansi --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Inflasi Negara</label>
                            <input type="number"
                              class="form-control text-light" name="inflansi" id="" aria-describedby="helpId" placeholder="">
                              @error('inflansi')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{-- 7 Jam / Bulan --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Jam Penggunaan Per Bulan</label>
                            <input type="number"
                              class="form-control text-light" name="jam_bln" id="" aria-describedby="helpId" placeholder="">
                              @error('jam_bln')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{-- 8 Kebutuhan Ruang --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Kebutuhan Ruang</label>
                            <input type="number"
                              class="form-control text-light" name="kebutuhan_ruang" id="" aria-describedby="helpId" placeholder="">
                              @error('kebutuhan_ruang')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{-- 9 Biaya Ruang --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Biaya Ruang</label>
                            <input type="number"
                              class="form-control text-light" name="by_ruang" id="" aria-describedby="helpId" placeholder="">
                              @error('by_ruang')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{-- 10 Daya Mesin --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Daya Mesin</label>
                            <input type="number"
                              class="form-control text-light" name="daya_mesin" id="" aria-describedby="helpId" placeholder="">
                              @error('daya_mesin')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{-- 11 biaya listrik --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Biaya Listrik</label>
                            <input type="number"
                              class="form-control text-light" name="biaya_listrik" id="" aria-describedby="helpId" placeholder="">
                              @error('biaya_listrik')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                            {{--12 biaya operator --}}
                          <div class="mb-3">
                            <label for="" class="form-label">Biaya Operator</label>
                            <input type="number"
                              class="form-control text-light" name="biaya_operator" id="" aria-describedby="helpId" placeholder="">
                              @error('biaya_operator')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>

                          <button type="submit" class="btn btn-lg btn-success"><b>SUBMIT</b></button>
                          <button type="reset" class="btn btn-lg btn-warning"><b>RESET</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
