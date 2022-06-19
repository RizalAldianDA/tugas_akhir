<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Akun Warga</title>
        <script type="text/javascript" src="{{ url('') }}/assets/js/chartjs/Chart.js"></script>
        <style>
            .graph{
                height: 100%;
            }
        </style>
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
                        <div class="py-4 d-flex justify-content-end align-items-center">
                            <h2 class="mr-auto">Daftar Warga</h2>
                            <form class="form-inline my-2 my-lg-0" action="{{route('wargaall.searchall')}}" method="GET">
                                <select class="form-control" name="tipe" id="tipe">
                                    <option value="nik"> NIK
                                    </option>
                                    <option value="nokk"> NO KK
                                    </option>
                                    <option value="nama"> NAMA
                                    </option>
                                </select>
                                <input id="name" class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari" aria-label="Search" value="{{old('cari')}}">
                                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="cari"><i class="fa fa-search"></i></button>
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
                        <div class="graph">
                            <div style="width: 50%;margin: 0 auto">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <input type="hidden" id="result1" value="{{ $result1 ->count()}}">
                        <input type="hidden" id="result2" value="{{ $result2 ->count()}}">
                        <br>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>No KK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Nomor HP</th>
                                <th>Alamat</th>
                                <th>Status Covid 19</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($wargas as $akun)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td><a href="{{ route('wargaall.detailall',['warga' => $akun->nik]) }}">{{$akun->nik}}</a></td>
                                    <td>{{$akun->nokk}}</td>
                                    <td>{{$akun->nama}}</td>
                                    <td>{{$akun->gender == 'p' ? 'Perempuan' : 'Laki-laki'}}</td>
                                    <td>{{$akun->tanggal_lahir}}</td>
                                    <td>{{$akun->rt}}</td>
                                    <td>{{$akun->rw}}</td>
                                    <td>{{$akun->nomorhp == '' ? 'N/A' : $akun->nomorhp}}</td>
                                    <td>{{$akun->alamat == '' ? 'N/A' : $akun->alamat}}</td>
                                    <td>{{$akun->status == '' ? 'N/A' : $akun->status}}</td>
                                </tr>
                                @empty
                                    <td colspan="10" class="text-center">Tidak ada data...</td>
                                @endforelse
                            </tbody>
                        </table>
                         {{ $wargas->links() }} 
                    </section> 
            <!-- /.content -->
        </div>
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var result1 = document.getElementById("result1").value;
            var result2 = document.getElementById("result2").value;
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Sudah Mengisi","Belum Mengisi"],
                    datasets: [{
                        label: '',
                        data: [
                            
                                result1
                            ,
                                result2
                             
                        ],
                        backgroundColor: [
                        'rgba(0, 255, 0, 0.8)',
                        'rgba(255, 0, 0, 0.8)'
                        ],
                        borderColor: [
                        'rgba(0, 255, 0, 0.8)',
                        'rgba(255, 0, 0, 0.8)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        @endsection
    </body>
</html>