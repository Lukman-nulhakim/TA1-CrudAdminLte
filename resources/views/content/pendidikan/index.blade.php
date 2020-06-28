@extends('master')
@section('title', 'Pendidikan')
@section('pendidikan','active')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card bg-light my-3">
            <div class="card-header bg-dark py-3">
                <div class="row">
                    <div class="col-sm-6"><h3>Dashboard</h3></div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <a href="{{ route('pendidikans.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Data</a>
                    </div>
                </div>
                {{-- Memakai Sweet alert --}}
                <div class="flash-data" data-flashdata="{{ session()->has('pesan') }}"></div>
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
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($pendidikans as $pendidikan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($pendidikan->nama_pendidikan=='SD')
                                            <h5><span class="badge badge-danger">{{ $pendidikan->nama_pendidikan }}</span></h5>
                                            @endif
                                            @if ($pendidikan->nama_pendidikan=='SMP')
                                            <h5><span class="badge badge-primary">{{ $pendidikan->nama_pendidikan }}</span></h5>
                                            @endif
                                            @if ($pendidikan->nama_pendidikan=='SMA/SMK')
                                            <h5><span class="badge badge-secondary">{{ $pendidikan->nama_pendidikan }}</span></h5>
                                            @endif
                                            @if ($pendidikan->nama_pendidikan=='D3')
                                            <h5><span class="badge badge-success">{{ $pendidikan->nama_pendidikan }}</span></h5>
                                            @endif
                                            @if ($pendidikan->nama_pendidikan=='S1')
                                            <h5><span class="badge badge-success">{{ $pendidikan->nama_pendidikan }}</span></h5>
                                            @endif
                                            @if ($pendidikan->nama_pendidikan=='S2')
                                            <h5><span class="badge badge-success">{{ $pendidikan->nama_pendidikan }}</span></h5>
                                            @endif
                                            @if ($pendidikan->nama_pendidikan=='S3')
                                            <h5><span class="badge badge-success">{{ $pendidikan->nama_pendidikan }}</span></h5>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                
                                                <a href="{{ route('pendidikans.edit', ['pendidikan' => $pendidikan->id]) }}" class="btn btn-success mr-4"><i class="fa-1x text-decoration-none fas fa-edit"></i></a>

                                                <form action="{{ route('pendidikans.destroy', ['pendidikan' => $pendidikan->id]) }}" method="POST">
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