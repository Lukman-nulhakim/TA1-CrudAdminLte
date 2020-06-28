@extends('master')
@section('title', 'Dashboard')
@section('karyawann','active')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card p-2 mt-2">
            <div class="card-header bg bg-dark">
                <div class="row pt-2 pb-2">
                    <div class="col-sm-6 card-title"><h3>Data Karyawan</h3></div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <a href="{{ route('karyawans.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Data</a>
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
            
            <div class="row mt-3">
                <div class="col-12 col-lg-12">
                    <table class="table table-hover table-info table-bordered" id="myTable">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Nomor Hp</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse ($karyawans as $karyawan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $karyawan->nama }}</td>
                                    <td>{{ $karyawan->jenis_kelamin }}</td>
                                    <td>{{ $karyawan->umur }}</td>
                                    <td>{{ $karyawan->no_telepon }}</td>
                                    <td>{{ $karyawan->jabatan->jabatan }}</td>
                                    <td>{{ $karyawan->pendidikan->nama_pendidikan }}</td>
                                    <td>{{ $karyawan->status->nama_status }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('karyawans.edit', ['karyawan' => $karyawan->id]) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('karyawans.destroy', ['karyawan' => $karyawan->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                            </form>
                                            {{-- <a href="{{ route('karyawans.show', ['karyawan' => $karyawan->id]) }}" class="btn btn-info ml-2">Show</a> --}}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            <td colspan="9" class="text-center">Data Kosong</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection