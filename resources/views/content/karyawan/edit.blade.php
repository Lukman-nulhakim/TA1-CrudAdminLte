@extends('master')
@section('title', 'edit')
@section('karyawann','active')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Data Karyawan</div>
                    <div class="card-body">
                        <form action="{{ route('karyawans.update', ['karyawan' => $karyawan->id]) }}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" autocomplete="off" value="{{ old('nama') ?? $karyawan->nama }}">
                                        @error('nama')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="custom-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="laki-laki" {{ (old('jenis_kelamin') ?? $karyawan->jenis_kelamin ) == 'laki-laki' ? 'selected' : '' }}>
                                                Laki-laki
                                            </option>
                                            <option value="perempuan" {{ (old('jenis_kelamin') ?? $karyawan->jenis_kelamin ) == 'perempuan' ? 'selected' : '' }}>
                                                Perempuan
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="text" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Umur" autocomplete="off" value="{{ old('umur') ?? $karyawan->umur }}">
                                        @error('umur')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="no_telepon">No Telepon</label>
                                        <input type="text" name="no_telepon" id="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" placeholder="No Telepon" autocomplete="off" value="{{ old('no_telepon') ?? $karyawan->no_telepon }}">
                                        @error('no_telepon')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="jabatan_id">Jabatan</label>
                                        <select class="custom-select @error('jabatan') is-invalid @enderror" name="jabatan_id" id="jabatan_id">
                                            @foreach ($jabatans as $jabatan)
                                                <option value="{{ $jabatan->id }}" {{ (old('jabatan_id') ?? $karyawan->jabatan->jabatan ) == $jabatan->jabatan ? 'selected' : '' }}>
                                                    {{ $jabatan->jabatan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jabatan_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="pendidikan_id">Pendidikan</label>
                                        <select class="custom-select @error('nama_pendidikan') is-invalid @enderror" name="pendidikan_id" id="pendidikan_id">
                                            @foreach ($pendidikans as $pendidikan)
                                                <option value="{{ $pendidikan->id }}" {{ (old('pendidikan_id') ?? $karyawan->pendidikan->nama_pendidikan ) == $pendidikan->nama_pendidikan ? 'selected' : '' }}>
                                                    {{ $pendidikan->nama_pendidikan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('pendidikan_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="status_id">Status</label>
                                        <select class="custom-select @error('nama_status') is-invalid @enderror" name="status_id" id="status_id">
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}" {{ (old('status_id') ?? $karyawan->status->nama_status )== $status->nama_status ? 'selected' : '' }}>
                                                    {{ $status->nama_status }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-md-12 col-sm-12 mt-4">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection