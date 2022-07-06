<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List Files</title>
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
        @extends('admin_layout_file.app')
        @section('header')
        @include('admin_layout_file.header')
        @endsection
        @section('leftbar')
        @include('admin_layout_file.leftbar')
        
        @endsection
        @section('rightbar')
        @include('admin_layout_file.rightbar')
        @endsection
        @section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto">List File</h2>
                    <a href="{{ route('file.create') }}" class="btn btn-primary">
                    Add File
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
                        <th>File Name</th>
                        <th>Publisher Name</th>
                        <th>Description</th>
                        <th colspan="2"><center>Action</center></th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($documents as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->file_name}}</td>
                            <td>{{$data->publisher_file}}</td>
                            <td><span class="main-text"><p>{{$data->description}}</p></span></td>
                            <td>
                                <center>
                                    <a class="btn btn-primary" href="{{ url('') }}/{{$data->file}}" alt="">Download</a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a href="{{ route('file.edit',['document' => $data->id]) }}" class="btn btn-primary">Edit</a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <form action="{{ route('file.destroy',['document' => $data->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                    <button type="submit" class="btn btn-danger ml-3">Delete</button>
                                    </form>
                                </center>
                            </td>
                            
                        </tr>
                        @empty
                            <td colspan="4" class="text-center">Tidak ada File...</td>
                        @endforelse
                    </tbody>
                </table>
        </section> 
        <!-- /.content -->
    </div>
    @endsection
    </body>
</html>
   