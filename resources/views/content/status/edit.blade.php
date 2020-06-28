@extends('master')
@section('title', 'create | status')
@section('status','active')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Form Pendidikan</div>
                    <div class="card-body">
                        <form action="{{ route('statuses.update', ['status' => $status->id ]) }}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="nama_status">Status</label>
                                        <select class="custom-select  @error('nama_status') is-invalid @enderror" name="nama_status" id="nama_status">
                                            <option value="Karyawan magang" {{ (old('nama_status') ?? $status->nama_status ) == 'Karyawan magang' ? 'selected' : '' }}>
                                                Karyawan Magang
                                            </option>
                                            <option value="Karyawan kontrak" {{ (old('nama_status') ?? $status->nama_status ) == 'Karyawan kontrak' ? 'selected' : '' }}>
                                                Karyawan Kontrak
                                            </option>
                                            <option value="Karyawan tetap" {{ (old('nama_status') ?? $status->nama_status ) == 'Karyawan tetap' ? 'selected' : '' }}>
                                                Karyawan Tetap
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
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