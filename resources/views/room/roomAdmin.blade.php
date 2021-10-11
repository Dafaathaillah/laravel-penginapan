@extends('layouts.main')
@section('title')
    | Manage Room 
@endsection
@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ti-ticket bg-c-blue"></i>
                <div class="d-inline">
                    <h4>List Room Admin</h4>
                    <span>Manage our room</span>
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
                    <li class="breadcrumb-item"><a href="#!">List Room</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-round btn-sm" href="{{ Route('room.create') }}">Create New Room</a>
        </div>
        <div class="card-body">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Fasilitas</th>
                            <th width="300px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $num = 0; ?>

                        @foreach ($room_admins as $data)
                            
                        <tr class="table-active">
                            <th scope="row">{{ $num +=1 }}</th>
                            <td><img src="{{ asset('storage/'. $data->gambar) }}" style="width:100px;"></td>
                            <td>{{ $data->nama }}</td>
                            <td>{!! $data->fasilitas !!}</td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-round btn-sm btn-edit" href="{{ route('room.edit', $data->id) }}" data-fasilitas="{{ $data->faslitas}}"><i class="fa fa-edit"></i> Edit</a>
                                <form action="{{ route('room.destroy', $data->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-round btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
