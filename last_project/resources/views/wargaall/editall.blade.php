<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        @extends('admin_layout_warga.app')
        @section('header')
        @include('admin_layout_warga.header')
        @endsection
        @section('leftbar')
        @include('admin_layout_warga.leftbar')
        
        @endsection
        @section('rightbar')
        @include('admin_layout_warga.rightbar')
        @endsection
        @section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="pt-3 justify-content-end align-items-center">
            <h1 class="h2 mr-auto">Ubah Biodata</h1>
            <hr>
            <form action="{{ route('wargaall.updateall',['warga' => $wargas->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') ?? $wargas->nik }}">
                    @error('nik')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nokk">NO KK</label>
                    <input type="text" class="form-control @error('nokk') is-invalid @enderror" id="nokk" name="nokk" value="{{ old('nokk') ?? $wargas->nokk }}">
                    @error('nokk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender') ?? $wargas->gender }}">
                    @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $wargas->tanggal_lahir }}">
                    @error('tanggal_lahir')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{ old('rt') ?? $wargas->rt }}">
                    @error('rt')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rt">RW</label>
                    <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{ old('rw') ?? $wargas->rw }}">
                    @error('rw')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="passwordwarga">Password</label>
                    <input type="text" class="form-control @error('passwordwarga') is-invalid @enderror" id="passwordwarga" name="passwordwarga" value="{{ old('passwordwarga') ?? $wargas->passwordwarga }}">
                    @error('passwordwarga')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomorhp">nomorhp</label>
                    <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" id="nomorhp" name="nomorhp" value="{{ old('nomorhp') ?? $wargas->nomorhp }}">
                    @error('nomorhp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') ?? $wargas->alamat }}">
                    @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">UBAH</button>
            </form>
            </div>
        </section> 
        <!-- /.content -->
    </div>
    @endsection
    </body>
</html>