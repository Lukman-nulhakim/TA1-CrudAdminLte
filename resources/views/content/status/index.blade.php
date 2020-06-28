@extends('master')
@section('title', 'Status')
@section('status','active')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card bg-light my-3">
            <div class="card-header bg-dark py-3">
                <div class="row">
                    <div class="col-sm-6"><h3>Dashboard</h3></div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <a href="{{ route('statuses.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Data</a>
                    </div>
                </div>
                {{-- Memakai Sweet alert --}}
                <div class="flash-data" data-flashdata="{{ session()->get('pesan') }}"></div>
                {{-- @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif --}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($statuses as $status)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($status->nama_status=='Karyawan magang')<h5><span class="badge badge-danger">{{ $status->nama_status }}</h5></span> 
                                            @endif
                                            @if ($status->nama_status=='Karyawan kontrak')<h5><span class="badge badge-secondary">{{ $status->nama_status }}</h5></span> 
                                            @endif
                                            @if ($status->nama_status=='Karyawan tetap')<h5><span class="badge badge-success">{{ $status->nama_status }}</h5></span> 
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                
                                                <a href="{{ route('statuses.edit', ['status' => $status->id]) }}" class="btn btn-success mr-4"><i class="fa-1x text-decoration-none fas fa-edit"></i></a>

                                                <form action="{{ route('statuses.destroy', ['status' => $status->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                <button type="submit" class="btn btn-danger"><i class="fa-1x fas fa-trash-alt"></i></button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                <td colspan="4" class="text-center">Data Kosong</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection