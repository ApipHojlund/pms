@extends('layouts.master')
@section('tittle','judul')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-tittle">
                    Judul Halaman <a href="/index">back</a>
                 </h4>
                    <form action="/ /store" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name=""
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name=""
                                id=""
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">City</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option selected>Select one</option>
                                <option value="">New Delhi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Choose file</label>
                            <input
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
