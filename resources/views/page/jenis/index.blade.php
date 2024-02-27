@extends('layouts.master')
@section('title','Type')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @error('tipe')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="card-tittle">
                        <h4>
                            Material Type Table
                        </h4>
                        @can('admin')
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Data <i class="mdi mdi-library-plus"></i>
                        </button>
                        @endcan
                    </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/material-type/store" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="" class="form-label">Type</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
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
                        <table
                        id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Tipe</th>
                                    @can('admin')
                                    <th scope="col">Aksi</th>
                                    @endcan
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($jenis as $jenis)
                            <tbody>
                                <tr class="">
                                    <td>{{$no++}}</td>
                                    <td>{{$jenis->id}}</td>
                                    <td>{{$jenis->tipe}}</td>
                                    @can('admin')
                                    <td>
                                        <button type="button" class="btn btn-info" onclick="showUpdateModal()">
                                            Update Data
                                        </button>

                                        <!-- Modal Update -->
                                        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                                        <button type="button" class="btn btn-primary btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/jenis-bahan/{{$jenis->id}}/update" method="post">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Tipe</label>
                                                            <input value="{{$jenis->tipe}}"
                                                                type="text"
                                                                class="form-control"
                                                                name="tipe"
                                                                id=""
                                                                aria-describedby="helpId"
                                                                placeholder="TIPE"
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
                                        </div>
                                    </div>

                                    <button class="btn btn-danger" onclick="Delete('/material-type/{{$jenis->id}}/hapus')">Hapus</button>
                                    @endcan
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
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
    function showUpdateModal() {
        $('#updateModal').modal('show');
    }
</script>
@endsection
