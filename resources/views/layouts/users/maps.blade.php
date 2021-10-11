@extends('layouts.main')
@section('title')
    | Maps
@endsection
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ti-map-alt bg-c-green"></i>
                    <div class="d-inline">
                        <h4>Maps</h4>
                        <span>Location of Penginapan Sederhana</span>
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
                        <li class="breadcrumb-item"><a href="#!">Maps</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5842616604177!2d115.99984721404965!3d-3.4507835974883476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de8b72038b1cf73%3A0x2c90f3aec8dd76c6!2sPenginapan%20Sederhana%20Batulicin!5e0!3m2!1sid!2sid!4v1633245725616!5m2!1sid!2sid"
                            width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
