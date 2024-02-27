@extends('layout.master')
@section('title','Produksi')
@section('konten')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Production Page
                    {{-- <a href="//create">tambah data +</a> --}}
                 </h4>
                 <div class="table-responsive">
                    <br>
                    <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id</th>
                                <th scope="col">Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($produksi as $u)
                            <tr class="">
                                <td>{{$no++}}</td>
                                <td>{{$u->id}}</td>
                                <td>{{$u->keterangan}}</td>
                                <td>
                                    <button type="button" class="btn btn-info" onclick="showUpdateModal({{ $u->id }})">
                                        Update Data
                                    </button>
                                    <a href="/produksi/{{$u->id}}/detail" class="btn btn-primary">Detail</a>
                                    <button class="btn btn-danger" onclick="Delete('/produksi/{{$u->id}}/hapus')">Hapus</button>
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
</div>
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="btn btn-primary btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="updateForm">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label text-light">Keterangan</label>
                        <input type="text" class="form-control text-light" name="keterangan" id="tipe" aria-describedby="helpId" placeholder="KETERANGAN">
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
