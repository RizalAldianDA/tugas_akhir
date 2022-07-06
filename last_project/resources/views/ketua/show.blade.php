<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profil {{$ketua->name}}</title>
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
                        <h1 class="h2 mr-auto">Profil {{$ketua->nama}}</h1>
                        <form action="{{ route('ketua.destroy',['ketua'=>$ketua->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        <a href="{{ route('ketua.edit',['ketua' => $ketua->id]) }}" class="btn btn-primary">Edit</a>
                        </form>
                    </div>
                    @if(session()->has('pesan'))
                        <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                        </div>
                    @endif
                </section>
                <!-- Main content -->
                <section class="content">
                    <ul>
                        <li>NIK: {{$ketua->nik}} </li>
                        <li>Nama: {{$ketua->nama}} </li>
                        <li>Username: {{$ketua->usernameket}} </li>
                        <li>Password: {{$ketua->passwordket}} </li>
                        <li>RT: {{$ketua->rt}} </li>
                        <li>RW: {{$ketua->rw}} </li>
                        <li>Nomor HP:{{$ketua->nomorhp == '' ? 'N/A' : $ketua->nomorhp}}</li>
                    </ul>
            </section> 
            <!-- /.content -->
        </div>
        @endsection
    </body>
</html>