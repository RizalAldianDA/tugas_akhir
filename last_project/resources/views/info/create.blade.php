<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Modifikasi Informasi Web</title>
    </head>
    <body>
        @extends('admin_layout_info.app')
        @section('header')
        @include('admin_layout_info.header')
        @endsection
        @section('leftbar')
        @include('admin_layout_info.leftbar')
        
        @endsection
        @section('rightbar')
        @include('admin_layout_info.rightbar')
        @endsection
        @section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Penambahan Info</h1>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                    <form action="{{ route('info.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tipe">Lokasi Info</label>
                            <select class="form-control" name="tipe" id="tipe">
                                <option value="bnp" {{ old('tipe')=='bnp' ? 'selected': '' }} > Hal Beranda Warga Tanpa Password
                                </option>
                                <option value="bp" {{ old('tipe')=='bp' ? 'selected': '' }} > Hal Beranda Warga Dengan Password
                                </option>
                                <option value="ab" {{ old('tipe')=='ab' ? 'selected': '' }} > Hal Tentang Kami
                                </option>
                                <option value="log" {{ old('tipe')=='log' ? 'selected': '' }} > Login
                                </option>
                            </select>                               
                            @error('tipe')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label for="title">Judul Info Web</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status Info Web</label>
                            <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="ON" value="ON" {{ old('status')=='ON' ? 'checked': '' }} >
                                <label class="form-check-label" for="ON">ON</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="OFF" value="OFF" {{ old('status')=='OFF' ? 'checked': '' }} >
                                <label class="form-check-label" for="OFF">OFF</label>
                            </div>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Tambah</button>
                    </form>
            </section> 
            <!-- /.content -->
        </div>
        @endsection
    </body>
 </html>
