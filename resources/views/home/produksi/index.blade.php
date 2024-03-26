@extends('layout.master')
@section('title', 'Produksi')
@section('konten')
    <div class="content-wrapper mt-3">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tittle">
                            Production Page <br>
                            <a class="btn btn-primary mt-3" href="/produksi/tambah">tambah data +</a>
                        </h4>
                        <div class="table-responsive">
                            <br>
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Petugas</th>
                                        <th scope="col">Pemesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($produksi as $index => $u)
                                        <tr class="">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->keterangan }}</td>
                                            <td>{{ $details[$index]->Petugas->nama }}</td>
                                            <td>{{ $details[$index]->Pemesan->nama }}</td>
                                            <td>
                                                <button type="button" class="btn btn-info" onclick="showUpdateModal({{ $u->id }})">Update Data</button>
                                                <a href="/produksi/{{ $u->id }}/detail" class="btn btn-primary">Detail</a>
                                                <button class="btn btn-danger" onclick="Delete('/produksi/{{ $u->id }}/hapus')">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="card col-lg-3 mt-3">
                            <div class="card-header">
                                <center>
                                    <h2 class="card-header text-primary">PRODUKSI</h2>
                                </center>
                            </div>
                            <div class="card-body bg-light">
                                <center><span class="mdi mdi-dropbox icon-lg text-primary"></span></center>
                                <center><a href="/produksi/index" class="mt-3 btn btn-primary">Halaman Produksi <i
                                            class="mdi mdi-arrow-right"></i></a></center>
                            </div>
                        </div>
                        <div class="card col-lg-3 mt-3">
                            <div class="card-header">
                                <center>
                                    <h2 class="card-header text-success">DETAIL PRODUKSI</h2>
                                </center>
                            </div>
                            <div class="card-body bg-light">
                                <center><span class="mdi mdi-magnify icon-lg text-success"></span></center>
                                <center><a href="/detail_produksi" class="mt-3 btn btn-success">Halaman Detail Produksi
                                        <i class="mdi mdi-arrow-right"></i></a></center>
                            </div>
                        </div>
                        <div class="card col-lg-3 mt-3">
                            <div class="card-header">
                                <center>
                                    <h2 class="card-header text-danger">Produk</h2>
                                </center>
                            </div>
                            <div class="card-body bg-light">
                                <center><span class="mdi mdi-codepen icon-lg text-danger"></span></center>
                                <center><a href="/produk" class="mt-3 btn btn-danger">Halaman Produk <i
                                            class="mdi mdi-arrow-right"></i></a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn btn-primary btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="updateForm">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label ">Keterangan</label>
                            <input type="text" class="form-control " name="keterangan" id="tipe"
                                aria-describedby="helpId" placeholder="KETERANGAN">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="submitUpdateForm()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showUpdateModal(id) {
            // Mengatur nilai input pada modal sesuai dengan data yang ingin diperbarui
            var tipe = document.getElementById('tipe');
            tipe.value = $('#produksi' + id).text();

            // Mengatur action form pada modal sesuai dengan ID yang dipilih
            var form = document.getElementById('updateForm');
            form.action = "/produksi/" + id + "/update";

            // Menampilkan modal
            $('#updateModal').modal('show');
        }

        function submitUpdateForm() {
            // Mengirimkan form untuk disubmit
            var form = document.getElementById('updateForm');
            form.submit();
        }
    </script>
@endsection
