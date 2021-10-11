    @extends('layouts.maincrud')

    @section('title')
        | Create Dashboard
    @endsection

    @section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ti-hand-point-up bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Dashboard Admin</h4>
                        <span>Form Input Dashboard Admin</span>
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
                        <li class="breadcrumb-item"><a href="#!">Dashboard Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form method="POST" action="{{ route('dashboardadmin.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upload File</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="gambar" id="gambar" placeholder="upload file berupa gambar">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Type a Text">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Type a Text">
                            </div>
                        </div>   
                        <div class="float-right my-2">
                            <button type="submit" class="btn btn-primary btn-round btn-sm">Submit</button>
                            <a class="btn btn-warning btn-round btn-sm" href="{{ route('dashboardadmin.index') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
