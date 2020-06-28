@extends('master')
@section('title', 'create | jabatan')
@section('jabatan','active')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Form Jabatan</div>
                    <div class="card-body">
                        <form action="{{ route('jabatans.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="jabatan" autocomplete="off" value="{{ old('jabatan') }}">
                                        @error('jabatan')
                                            {{ $message }}
                                        @enderror
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
