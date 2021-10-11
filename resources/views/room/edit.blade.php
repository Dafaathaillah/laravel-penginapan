@extends('layouts.maincrud')
@section('title')
    | Edit Room
@endsection
@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ti-hand-point-up bg-c-blue"></i>
                <div class="d-inline">
                    <h4>Dashboard Admin</h4>
                    <span>Form Manage Dashboard Admin</span>
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
                <form method="POST" action="{{ route('room.update', $room_admins->id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Upload File</label>
                        <div class="col-sm-10">
                            <input type="file" name="gambar" class="form-control" id="gambar" value="{{ asset('storage/'. $room_admins->gambar) }}" style="width:50%%;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama" value="{{$room_admins->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fasilitas lama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{!! $room_admins->fasilitas !!}" id="fslt-val" disabled> 
                        </div>
                    </div>
                    <script>
                        // $(document).ready(function () {
                            // $('#flst-val').on('change',function () {
                               let coba = document.getElementById('fslt-val').value
                                console.log(coba)
                                document.getElementsByClassName('note-editable').html = coba
                                // fsl.getElementsByTagName("p").innerHTML = coba
                                
                            //    $('.note-editable').html(val);
                            // })
                        // })
                    </script>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fasilitas</label>
                        <div class="col-sm-10">
                            <textarea name="fasilitas" class="fasilitas" id="summernote" ></textarea>
                            <script>
                                $('#summernote').summernote({
                                    // placeholder: 'Hello stand alone ui',
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
                            {{-- <script>
                                $(document).ready(){
                                    $('.note-editable').on('change', function () {
                                        $var = document.getElementsByClassName('.note-editable').html

                                        $('.fasilitas').val($var)
                                    })
                                }
                            </script> --}}
                            {{-- <input type="text" class="form-control" name="fasiliitas" id="fasilitas1" placeholder="Type a Text"> --}}
                        </div>
                    </div>
                    <div class="float-right my-2">
                        <button type="submit" class="btn btn-primary btn-round btn-sm">Submit</button>
                        <a href="{{ route('room.index') }}" class="btn btn-warning btn-round btn-sm">Cancel</a>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
