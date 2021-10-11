@extends('layouts.main')

@section('title')
    | Dashboard Admin
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ti-desktop bg-c-blue"></i>
                <div class="d-inline">
                    <h4>Dashboard Admin</h4>
                    <span>Selamat datang di dashboard admin anda dapat melakukan perubahan!</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="#">
                            {{-- <i class="icofont icofont-home"></i> --}}
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="card">
        <div class="card-header">Welcome -> <b><i>{{ auth()->user()->email }}</i></b></div>
        <div class="card-body">
            <h5 class="card-title">Hi, <b><i>{{ auth()->user()->name }}</i></b> Welcome To Dashboard Admin</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Manage Dashboard Admin
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ auth()->user()->name }} You Are Admin!!, are you sure manage the layout?!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary" href="{{ route('listdb') }}"><i></i>yes</a>
                            <a class="btn btn-warning" href="{{ route('dashboardadmin.index') }}"><i></i>No</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
