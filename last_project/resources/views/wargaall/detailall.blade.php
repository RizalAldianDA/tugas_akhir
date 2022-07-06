<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data</title>
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
            <div class="pt-3 d-flex justify-content-end align-items-center">
                <h1 class="h2">Data  {{$wargas->nama}}</h1>
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
                <li>NIK: {{$wargas->nik}} </li>
                <li>NO KK: {{$wargas->nokk}}</li>
                <li>Jenis Kelamin: {{$wargas->gender == 'p' ? 'Perempuan' : 'Laki-laki'}}</li>
                <li>Tanggal Lahir: {{date('d F Y', strtotime($wargas->tanggal_lahir))}}</li>
                <li>RT : {{$wargas->rt}}</li>
                <li>RW : {{$wargas->rw}}</li>
                <li>Password : {{$wargas->passwordwarga}}</li>
                <li>Nomor HP: {{$wargas->nomorhp == '' ? 'N/A' : $wargas->nomorhp}}</li>
                <li>Alamat: {{$wargas->alamat == '' ? 'N/A' : $wargas->alamat}}</li>
                <li>Status Covid-19: {{$wargas->status == '' ? 'N/A' : $wargas->status}}</li>
            </ul> 
            <form action="{{ route('warga.destroy',['warga'=>$wargas->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                <a href="{{ route('wargaall.editall',['warga' => $wargas->id]) }}"class="btn btn-primary">UBAH</a>
            </form>
        </section> 
        <!-- /.content -->
    </div>
    @endsection
    </body>
</html>