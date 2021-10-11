@extends('layouts.maincrud')
@section('title')
    | Create Room
@endsection
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ti-layout-grid3 bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Manage Room</h4>
                        <span>From Input Room</span>
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
                        <li class="breadcrumb-item"><a href="#!">Create Room</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form method="POST" action="{{ route('room.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upload File</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="gambar" id="gambar"
                                    placeholder="upload file berupa gambar">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Type a Text">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 col-form-label">Fasilitas 1</label>
                            <div class="col-sm-10">
                                <textarea name="fasilitas" class="fasilitas" id="summernote"></textarea>
                                <script>
                                    $('#summernote').summernote({
                                        placeholder: 'Hello stand alone ui',
                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'underline', 'clear']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['table', ['table']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });
                                </script>
                                <script>
                                    $(document).ready(){
                                        $('.note-editable').on('change', function () {
                                            $var = document.getElementsByClassName('.note-editable').html

                                            $('.fasilitas').val($var)
                                        })
                                    }
                                </script>
                                {{-- <input type="text" class="form-control" name="fasiliitas" id="fasilitas1" placeholder="Type a Text"> --}}
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Fasilitas 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fasiliitas" id="fasilitas2" placeholder="Type a Text">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Fasilitas 3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fasiliitas" id="fasilitas5" placeholder="Type a Text">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Fasilitas 4</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fasiliitas" id="fasilitas4" placeholder="Type a Text">
                        </div>
                    </div> --}}
                        <div class="float-right my-2">
                            <button type="submit" class="btn btn-primary btn-round btn-sm">Submit</button>
                            <a class="btn btn-warning btn-round btn-sm" href="{{ route('room.index') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
