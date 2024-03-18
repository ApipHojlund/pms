@extends('layout.master')
@section('tittle', 'dashboard')
@section('konten')
    <div class="content-wrapper">
        {{-- <div class="d-xl-flex justify-content-between align-items-start">
                <h2 class="text-dark font-weight-bold mb-2">
                    Overview dashboard
                </h2>
                <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                    <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-link text-gray py-0 border-right">
                            7 Days
                        </button>
                        <button type="button" class="btn btn-link text-dark py-0 border-right">
                            1 Month
                        </button>
                        <button type="button" class="btn btn-link text-gray py-0">
                            3 Month
                        </button>
                    </div>
                    <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
                        <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-calendar me-1"></i>24 Mar 2019 - 24 Mar
                            2019
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                        <ul class="nav nav-tabs tab-transparent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#" role="tab"
                                    aria-selected="true">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="business-tab" data-bs-toggle="tab" href="#business-1"
                                    role="tab" aria-selected="false">Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="performance-tab" data-bs-toggle="tab" href="#" role="tab"
                                    aria-selected="false">Performance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="conversion-tab" data-bs-toggle="tab" href="#" role="tab"
                                    aria-selected="false">Conversion</a>
                            </li>
                        </ul>
                        <div class="d-md-block d-none">
                            <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                            <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                        </div>
                    </div> --}}
                <div class="tab-content tab-transparent-content">
                    <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                        {{-- <div class="row">
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">
                                                Orders
                                            </h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">
                                                932.00
                                            </h2>
                                            <div
                                                class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                                                <i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i>
                                            </div>
                                            <p class="mt-4 mb-0">Completed</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">
                                                5443
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">
                                                Unique Visitors
                                            </h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">
                                                756,00
                                            </h2>
                                            <div
                                                class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                                                <i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i>
                                            </div>
                                            <p class="mt-4 mb-0">Increased since yesterday</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">
                                                50%
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">
                                                Impressions
                                            </h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">
                                                100,38
                                            </h2>
                                            <div
                                                class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent">
                                                <i class="mdi mdi-eye icon-md absolute-center text-dark"></i>
                                            </div>
                                            <p class="mt-4 mb-0">Increased since yesterday</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">
                                                35%
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">
                                                Followers
                                            </h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">
                                                4250k
                                            </h2>
                                            <div
                                                class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                                                <i class="mdi mdi-cube icon-md absolute-center text-dark"></i>
                                            </div>
                                            <p class="mt-4 mb-0">Decreased since yesterday</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">
                                                25%
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0">{{ $dalam_proses }}</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-primary ">
                                                    <span class="mdi mdi-airplane-takeoff text-primary item-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-primary font-weight-normal">Model Dalam Proses</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0 text-dark">{{ $berhenti }}</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-danger">
                                                    <span class="mdi mdi-stop-circle-outline icon-item text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-danger font-weight-normal">Model Berhenti Produksi </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0 text-dark">{{ $ditahan }}</h3>
                                                    <p class="text-danger ms-2 mb-0 font-weight-medium"></p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-warning">
                                                    <span
                                                        class="mdi text-warning mdi-pause-circle-outline icon-item"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-warning font-weight-normal">Model Produksi Ditahan</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex align-items-center align-self-start">
                                                    <h3 class="mb-0 text-dark">{{ $selesai }}</h3>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="icon icon-box-success ">
                                                    <span
                                                        class="mdi mdi-checkbox-marked-circle icon-item text-success"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-success font-weight-normal">Model Selesai</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Revenue</h5>
                                        <div class="row">
                                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                    <h2 class="mb-0">$32123</h2>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                                </div>
                                                <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                                            </div>
                                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Sales</h5>
                                        <div class="row">
                                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                    <h2 class="mb-0">$45850</h2>
                                                    <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                                                </div>
                                                <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                                            </div>
                                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Purchase</h5>
                                        <div class="row">
                                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                    <h2 class="mb-0">$2039</h2>
                                                    <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                                                </div>
                                                <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                                            </div>
                                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($statuses) !!},
                datasets: [{
                    label: 'Produksi Status',
                    data: {!! json_encode($data) !!},
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgb(65, 200, 25)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgb(65, 200, 25)'
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
