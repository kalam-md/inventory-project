@extends('layouts.app')

@section('title', 'Barang Keluar')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
    <!-- Brand -->
    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Barang Keluar</a>
    <!-- User -->
    <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="dashboard/img/theme/kalam.jpg">
            </span>
            <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">Administrator</span>
            </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>Profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
            <i class="ni ni-calendar-grid-58"></i>
            <span>Date & Time</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>Logout</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>  
            </a>
        </div>
        </li>
    </ul>
    </div>
</nav>
<!-- End Navbar -->
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
</div>
<div class="container-fluid mt--8">
    <!-- Table -->
    <div class="row">
    <div class="col">
        <div class="card shadow">
        <div class="card-header border-0">
            <h3 class="mb-0">Barang Masuk</h3>
        </div>
        <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Stok Barang</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Kondisi Barang</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">
                    1
                </th>
                <td>
                    Sabun
                </td>
                <td>
                    <!-- <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i> pending
                    </span> -->
                    2
                </td>
                <td>
                    10 Februari 2002
                </td>
                <td>
                    <div class="d-flex align-items-center">
                    <span class="mr-2">60%</span>
                    <div>
                        <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </div>
                    </div>
                </td>
                <td>
                    Alat Mandi
                </td>
                <td>
                    Baru
                </td>
                <td>
                    <a href="#" class="badge badge-warning">Show</a>
                    <a href="#" class="badge badge-warning">Edit</a>
                    <a href="#" class="badge badge-danger">Delete</a>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="card-footer py-4">
            <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                </li>
                <li class="page-item active">
                <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
                </li>
            </ul>
            </nav>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection