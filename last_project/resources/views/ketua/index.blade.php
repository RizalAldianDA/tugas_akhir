<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Akun Ketua RT</title>
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
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto">Tabel Akun Ketua RT</h2>
                    <a href="{{ route('ketua.create') }}" class="btn btn-primary">
                    Tambah Akun
                    </a>
                </div>
                @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
            </section>
            <!-- Main content -->
            <section class="content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Nomor HP</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($ketuas as $akun)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td><a href="{{ route('ketua.show',['ketua' => $akun->id]) }}">{{$akun->nik}}</a></td>
                            <td>{{$akun->nama}}</td>
                            <td>{{$akun->usernameket}}</td>
                            <td>{{$akun->passwordket}}</td>
                            <td>{{$akun->rt}}</td>
                            <td>{{$akun->rw}}</td>
                            <td>{{$akun->nomorhp == '' ? 'N/A' : $akun->nomorhp}}</td>
                        </tr>
                        @empty
                            <td colspan="7" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
        </section> 
        <!-- /.content -->
    </div>
    @endsection
    </body>
</html>
   