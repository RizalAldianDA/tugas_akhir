<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ url('') }}/last_project/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Akun Warga</title>
        <!--Link-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/base-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-responsive-min.css">
  
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="{{ url('') }}/assets/js/chartjs/Chart.js"></script>

        <style>
            body{
                background-color: #cccccc;
            }
            .row{
                background-color: white;
            }
            .contain{
                width: 100%; 
                border-collapse: collapse; 
                font-size: 12px;
                overflow-x: auto;
            }
            .content {
                max-width: 80%; 
                margin: 0 auto !important; 
                float: none !important; 
                margin-left: auto;
		        margin-right: auto; 
                color: #23408e;      
            }
            .ket{
                max-width: 80% !important;
                margin: 0 auto !important;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                width: 100%;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            
             /*___________Bot Navigation_____________*/
            .botnav {
                background-color: #23408e;
                overflow: hidden;
            }
            .navbar-toggler{
                border: none;
            }
            .botnav-right{
                float: right;
            }
            .botnav a {
                float: left;
                color:white;
                text-align: center;
                padding: 13px 16px;
                text-decoration: none;
                font-size: 13px;
                font-weight: bold;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            .navbar-toggler-icon{
                color:white; 
            }

            /* Change the color of links on hover */
            .botnav a:hover {
                background-color: #cccccc;
                color: #23408e;
                height: 100%;
            }

            /* Add a color to the active/current link */
            .botnav a.active {
                background-color:#cccccc;
                color: #23408e;
                height: 100%;
            }
            .btn{
                float: right;
                height: 35px;
            }
            /*Dropdown Menu Navigation Bar*/
            .dropdown {
                float: left;
                overflow: hidden;
            }

            .dropdown .dropbtn {
                font-size: 13px;  
                border: none;
                outline: none;
                color: white;
                padding: 16px 16px;
                background-color: inherit;
                margin: 0;
                font-weight: bold;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            .navbar a:hover, .dropdown:hover .dropbtn {
                background-color:#cccccc;
                color:  #23408e;
            }
            
            .dropdown-content {
                display: none;
                position: fixed;
                background-color: #cccccc;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a {
                float: none;
                color:#23408e;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
                font-weight: bold;
            }

            .dropdown-content a:hover {
                color: white;
                background-color: #23408e;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
            .dropbtn-active{
                color: white !important;
            }

            @media screen and (min-width: 100px)and (max-width: 1000px)  and (min-height: 100px)and (max-height: 1200px) {  
                .content{
                    max-width: 100%;
                }
                .botnav-right{
                    float: none;
                }
                .dropdown {
                    float: left;
                    overflow: hidden;
                    width: 100%;
                }
                .botnav a.active {
                    width: 100%;
                }
                .botnav a {
                    float: left;
                    text-align: center;
                    padding: 13px 16px;
                    text-decoration: none;
                    font-size: 13px;
                    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    width: 100%;
                }

                .dropdown .dropbtn {
                    font-size: 13px;  
                    border: none;
                    outline: none;
                    padding: 16px 16px;
                    width: 100%;
                    background-color: inherit;
                    margin: 0;
                    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                } 
                .dropdown-content {
                    display: none;
                    position: relative;
                    width: 100%;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1; 
                }
                .dropdown-content a {
                    float: none;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                }
                .break{
                    display: block;
                }

                /*Content Page*/
                .container-content{
                    padding-bottom: 10%;
                }
                .container-content .row{
                    padding-bottom: 3%;
                    padding-top: 3%;
                }
                .container-content .pure-g{
                    padding-top: 3%;
                    padding-bottom: 3%;
                }
                .contain{
                    width: 100%; 
                    border-collapse: collapse; 
                    font-size: 12px;
                    overflow-x: auto;
                }
                .btn-aksi{
                    width: 100%;
                }
                .ket{
                    font-size: 13px;
                }
            }
        </style>
    </head>
    <body>
        <div class="botnav">
            <div class="content">
                <nav class="navbar-expand-lg navbar-dark">
                    <div class="botnav-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="Down" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="active" style="background-color: #cccccc" href="{{route('warga.index')}}">DAFTAR WARGA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('warga.addwarga')}}">TAMBAH WARGA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('pageketua.tentangkami')}}">TENTANG KAMI</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <button class="dropbtn">PENGATURAN <i class="fa fa-caret-down"></i></button>
                                        <div class="dropdown-content">
                                            <a href="{{route('pageketua.profilketua',['ketua' => session()->get('nik')])}}">PROFIL</a>
                                            <a href="{{route('loginketua.logout')}}">KELUAR</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-4 d-flex justify-content-end align-items-center">
                            <h2 class="mr-auto">Daftar Warga</h2>
                            <form class="form-inline my-2 my-lg-0" action="{{route('warga.search')}}" method="GET">
                                <select class="form-control" name="tipe" id="tipe">
                                    <option value="nik"> NIK
                                    </option>
                                    <option value="nokk"> NO KK
                                    </option>
                                    <option value="nama"> NAMA
                                    </option>
                                </select>
                                <input id="name" class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari" aria-label="Search" value="{{old('cari')}}">
                                <button class="btn btn-outline-primary my-2 my-sm-0 btn-aksi" type="submit" value="cari"><i class="fa fa-search"></i></button>
                            </form>

                        </div>
                        @if(session()->has('pesan'))
                            <div class="alert alert-success">
                                {{ session()->get('pesan') }}
                            </div>
                        @endif
                        <div class="content">
                            <div style="width: 90%;margin: 0 auto">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <input type="hidden" id="result1" value="{{ $result1 ->count()}}">
                        <input type="hidden" id="result2" value="{{ $result2 ->count()}}">
                        <input type="hidden" id="result3" value="{{ $result3 ->count()}}">
                        <input type="hidden" id="result4" value="{{ $result4 ->count()}}">
                        <div class="ket">
                            KETERANGAN
                            <div class="pure-g">
                                <div class="container">
                                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                                        TTC = Tidak Terpapar Covid
                                        <br>
                                        STC = Sedang Terpapar Covid
                                    </div>
                                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                                        PTC = Pernah Terpapar Covid
                                        <br>
                                        BM = Belum Mengisi
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contain">
                            <br>
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
                                    <th>Dimasukan Waktu</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($wargas as $akun)
                                    <tr>
                                        <th>{{$loop->iteration}}</th>
                                        <td><a href="{{ route('warga.showwarga',['profil' => $akun->nik]) }}">{{$akun->nik}}</a></td>
                                        <td>{{$akun->nokk}}</td>
                                        <td>{{$akun->nama}}</td>
                                        <td>{{$akun->gender == 'p' ? 'Perempuan' : 'Laki-laki'}}</td>
                                        <td>{{date('d F Y', strtotime($akun->tanggal_lahir))}}</td>
                                        <td>{{$akun->rt}}</td>
                                        <td>{{$akun->rw}}</td>
                                        <td>{{$akun->nomorhp == '' ? 'N/A' : $akun->nomorhp}}</td>
                                        <td>{{$akun->alamat == '' ? 'N/A' : $akun->alamat}}</td>
                                        <td>{{$akun->status == '' ? 'N/A' : $akun->status}}</td>
                                        <td>{{$akun->created_at}}</td>
                                    </tr>
                                    @empty
                                        <td colspan="12" class="text-center">Tidak ada data...</td>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $wargas->links() }} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Jquery-->
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var result1 = document.getElementById("result1").value;
            var result2 = document.getElementById("result2").value;
            var result3 = document.getElementById("result3").value;
            var result4 = document.getElementById("result4").value;
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["TTC","STC","PTC","BM"],
                    datasets: [{
                        label: '',
                        data: [
                            
                                result1
                            ,
                                result2
                            ,
                                result3
                            ,
                                result4
                             
                        ],
                        backgroundColor: [
                        'rgba(0, 255, 0, 0.8)',
                        'rgba(255, 0, 0, 0.8)',
                        'rgba(0, 0, 255, 0.8)',
                        'rgba(122, 122, 122, 0.8)'
                        ],
                        borderColor: [
                        'rgba(0, 255, 0, 0.8)',
                        'rgba(255, 0, 0, 0.8)',
                        'rgba(0, 0, 255, 0.8)',
                        'rgba(122, 122, 122, 0.8)'
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>