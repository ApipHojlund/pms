@extends('layout.master')
@section('title','Type')
@section('konten')
<div class="content-wrapper mt-3">
    <div class="row">
        <div class="col-lg-14 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                       Type Of Machine Page
                    </h4>
                    @can('admin')
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Data <i class="mdi mdi-library-plus"></i>
                        </button>
                    @endcan
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="/jenis_bahan/store" method="post">
                                          @csrf
                                          <div class="mb-3">
                                              <label for="" class="form-label">Type</label>
                                              <input
                                                  type="text"
                                                  class="form-control "
                                                  name="tipe"
                                                  id=""
                                                  aria-describedby="helpId"
                                                  placeholder="type"
                                              />
                                          </div>
                                      </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="SUBMIT" class="btn btn-primary">Submit</button>
                                          </div>
                                      </div>
                                      </form>
                              </div>
                          </div>
                      <br>
                    <div class="table-responsive">
                        <br>
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">tipe</th>
                                    @can('admin')
                                    <th>Aksi</th>
                                    @endcan
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($jenis as $j)
                                <tr class="">
                                    <td>{{$no++}}</td>
                                    <td>{{$j->id}}</td>
                                    <td>{{$j->tipe}}</td>
                                    @can('admin')
                                    <td>
                                        <button type="button" class="btn btn-info" onclick="showUpdateModal({{ $j->id }})">
                                            Update Data
                                        </button>
                                        <button class="btn btn-danger" onclick="Delete('/jenis_bahan/{{$j->id}}/hapus')">Hapus</button>
                                    </td>
                                    @endcan
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
                        <label for="" class="form-label ">Tipe</label>
                        <input type="text" class="form-control " name="tipe" id="tipe" aria-describedby="helpId" placeholder="TIPE">
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
    // Fungsi untuk menampilkan modal tambah
    function showTambahModal() {
        $('#tambahModal').modal('show');
    }

    // Fungsi untuk menampilkan modal update
    // function showUpdateModal() {
    //     $('#updateModal').modal('show');
    // }
</script>
<script>
    function showUpdateModal(id) {
        // Mengatur nilai input pada modal sesuai dengan data yang ingin diperbarui
        var tipe = document.getElementById('tipe');
        tipe.value = $('#jenis_bahan_' + id).text();

        // Mengatur action form pada modal sesuai dengan ID yang dipilih
        var form = document.getElementById('updateForm');
        form.action = "/jenis_bahan/" + id + "/update";

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
