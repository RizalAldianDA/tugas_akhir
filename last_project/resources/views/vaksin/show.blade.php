<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ url('') }}/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Detail Vaksinasi</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 d-flex justify-content-end align-items-center">
                        <h1 class="h2 mr-auto">Vaksinasi Ke - {{$vaksinasi->vaksinasi_ke}}</h1>
                        <a href="" class="btn btn-primary">Edit
                        </a>
                        <form action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                        </form>
                    </div>
                    <hr>
                    @if(session()->has('pesan'))
                        <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                        </div>
                    @endif
                    <ul>
                        <li>Nama Vaksin: {{$vaksinasi->vaksin}} </li>
                        <li>Tanggal Vaksinasi: {{$vaksinasi->tanggal_vaksinasi}} </li>
                        <li>Keluhan Setelah Vaksinasi: {{$vaksinasi->keluhan_vaksinasi == '' ? 'N/A' : $vaksinasi->keluhan_vaksinasi}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>