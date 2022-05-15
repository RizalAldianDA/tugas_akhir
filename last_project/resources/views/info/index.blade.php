<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List Information</title>
        <style>
            .main-text {
                text-align: justify;
                max-width: 100%;
            }

            .main-text p {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                max-width: 100%;
            }
        </style>
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
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto">List Information</h2>
                    <a href="{{ route('info.create') }}" class="btn btn-primary">
                    Add Info
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
                        <th>Type</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th colspan="2"><center>Action</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($infos as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->tipe == 'bnp' ? 'Beranda Tanpa Pass' : ($data->tipe == 'bp' ? 'Beranda Dengan Pass' : ($data->tipe == 'ab' ? 'Tentang Kami' : 'Login'))}}</td>
                            <td>{{$data->title}}</td>
                            <td><span class="main-text"><p>{{$data->description}}</p></span></td>
                            <td>{{$data->status}}</td>
                            <td>
                                <center>
                                <a href="{{ route('info.edit',['info' => $data->id]) }}" class="btn btn-primary">Edit
                                </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                <form action="{{ route('info.destroy',['info' => $data->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                <button type="submit" class="btn btn-danger ml-3">Delete</button>
                                </form>
                                </center>
                            </td>
                        </tr>
                        @empty
                            <td colspan="4" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
        </section> 
        <!-- /.content -->
    </div>
    @endsection
    </body>
</html>
   