@extends('layouts.app')

@section('title', 'Report')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
    <!-- Brand -->
    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Report</a>
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
            <h3 class="mb-0">Report</h3>
        </div>
        <div class="table-responsive">
            <div class="col-xl-3 col-lg-6 mb-3">
                <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0"> Report Barang Masuk</h5>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-file-pdf"></i>
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
</div>


@endsection