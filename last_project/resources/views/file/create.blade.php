<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>File</title>
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

        
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <section class="content-header">

                    <h1>Upload File</h1>
                    <hr>
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    </section>
                    
                    <section class="content">

                    <div class="form-group">
                        <label for="file_name">Nama File</label>
                        <input type="text" class="form-control @error('file_name') is-invalid @enderror" id="file_name" name="file_name" value="{{ old('file_name') }}">
                        @error('file_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control-file" id="file" name="file">
                        @error('file')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="publisher_file">Publisher</label>
                        <input type="text" class="form-control @error('publisher_file') is-invalid @enderror" id="publisher_file" name="publisher_file" value="{{ old('publisher_file') }}">
                        @error('publisher_file')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="3" class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-2 width">INPUT</button>
                    </form>        
                </div>
            </div>
        

</section> 
<!-- /.content -->
</div>
@endsection
        
    </body>
</html>