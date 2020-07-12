@extends('master')
@section('title', 'create | pendidikan')
@section('pendidikan','active')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Form Pendidikan</div>
                    <div class="card-body">
                        <form action="{{ route('pendidikans.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="nama_pendidikan">Nama Pendidikan</label>
                                        <select class="custom-select @error('nama_pendidikan') is-invalid @enderror" name="nama_pendidikan" id="nama_pendidikan">
                                            <option value="SD" {{ old('nama_pendidikan') == 'SD' ? 'selected' : '' }}>
                                                SD
                                            </option>
                                            <option value="SMP" {{ old('nama_pendidikan') == 'SMP' ? 'selected' : '' }}>
                                                SMP
                                            </option>
                                            <option value="SMA/SMK" {{ old('nama_pendidikan') == 'SMA/SMK' ? 'selected' : '' }}>
                                                SMA/SMK
                                            </option>
                                            <option value="D3" {{ old('nama_pendidikan') == 'D3' ? 'selected' : '' }}>
                                                D3
                                            </option>
                                            <option value="S1" {{ old('nama_pendidikan') == 'S1' ? 'selected' : '' }}>
                                                S1
                                            </option>
                                            <option value="S2" {{ old('nama_pendidikan') == 'S2' ? 'selected' : '' }}>
                                                S2
                                            </option>
                                            <option value="S3" {{ old('nama_pendidikan') == 'S3' ? 'selected' : '' }}>
                                                S3
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