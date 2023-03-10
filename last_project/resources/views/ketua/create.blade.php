<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pendaftaran Ketua RT</title>
    </head>
    <body>
        @extends('admin_layout_ketua.app')
        @section('header')
        @include('admin_layout_ketua.header')
        @endsection
        @section('leftbar')
        @include('admin_layout_ketua.leftbar')
        
        @endsection
        @section('rightbar')
        @include('admin_layout_ketua.rightbar')
        @endsection
        @section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Tambah Akun Ketua RT</h1>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                    <form action="{{ route('ketua.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                            @error('nik')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="usernameket">Username</label>
                            <input type="text" class="form-control @error('passwordket') is-invalid @enderror" id="usernameket" name="usernameket" value="{{ old('usernameket') }}">
                            @error('usernameket')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="passwordket">Password</label>
                            <input type="password" class="form-control @error('passwordket') is-invalid @enderror" id="passwordket" name="passwordket" value="{{ old('passwordket') }}">
                            @error('passwordket')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{ old('rt') }}">
                            @error('rt')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{ old('rw') }}">
                            @error('rw')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nomor">Nomor Hp</label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" value="{{ old('nomor') }}">
                            @error('nomor')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                    </form>
            </section> 
            <!-- /.content -->
        </div>
        @endsection
    </body>
 </html>
