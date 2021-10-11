@extends('layouts.main')
@section('title')
    | Room
@endsection
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ti-bookmark-alt bg-c-yellow"></i>
                    <div class="d-inline">
                        <h5>Book Room</h5>
                        <span>Lets choose our room </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ Route('dashboardadmin.index') }}">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Book Room</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="page-body">
            <div class="card" style="padding: 1rem !important">
                <div class="container">
                    <div class="row">

                        @foreach ($room_user as $data)
                        <div class="col-sm-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('storage/'. $data->gambar) }}" style="width:100%;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->nama }}</h5>
                                    <p class="card-text">Fasilitas:</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{!! $data->fasilitas !!}</li>
                                </ul>
                                <a href="{{ route('book.create') }}" class="btn btn-primary">Book</a>
                            </div>
                        </div>   
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
@endsection
