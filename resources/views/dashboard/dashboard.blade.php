@extends('layouts.main')

@section('title')
    | Dashboard User
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ti-desktop bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Dashboard User</h5>
                        <span>Welcome to dashboard user penginapan sederhana</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ Route('dashboardadmin.index') }}">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-body">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">  
                                @foreach ($db_user as $d)                            
                                <div class="carousel-item {!! $d->id == 4 ? 'active' : '' !!}">
                                    <img class="d-block w-100" src="{{ asset('storage/'. $d->gambar) }}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $d->nama }}</h5>
                                        <p>{{ $d->deskripsi }}</p>
                                    </div>
                                </div>
                                @endforeach  
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
