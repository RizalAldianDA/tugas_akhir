<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <!--Link-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
         <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/base-min.css">
         <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-min.css">
         <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-responsive-min.css">
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <title>Ubah Profil</title>
        <style>
            body{
                background-color: #cccccc;
            }
            .content {
                max-width: 80%; 
                margin: 0 auto !important; 
                float: none !important;  
                color: #23408e;      
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

            @media screen and (min-width: 100px)and (max-width: 700px)  {  
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
                
            }
        </style>
    </head>
    <body>
        <div class="botnav">
            <div class="content">
                <a href="" class="navbar-brand"></a>
                <nav class="navbar-expand-lg navbar-light">
                    <div class="botnav-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="Down" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="{{route('pagewarga.berandawarga')}}">BERANDA</a>
                                </li>
                                @if((session('check')=='yes'))
                                    <li class="nav-item">
                                        <a href="{{route('vaksin.index')}}">VAKSINASI</a>
                                    </li>
                                @elseif((session('check')=='no'))
                                @endif
                                <li class="nav-item">
                                    <a href="{{route('pagewarga.tentangkami')}}">TENTANG KAMI</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <button style="background-color: #cccccc ; color:#23408e" class="dropbtn">PENGATURAN <i class="fa fa-caret-down"></i></button>
                                        <div class="dropdown-content">
                                            <a class="active"  style="background-color: #23408e ; color :white" href="{{route('pagewarga.profilwarga',['warga' => session()->get('nik')])}}">PROFIL</a>
                                            <a href="{{route('loginwarga.logout')}}">KELUAR</a>
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
                        <div class="pt-3 justify-content-end align-items-center">
                        <h1 class="h2 mr-auto">Ubah Biodata</h1>
                        <hr>
                        <form action="{{ route('pagewarga.updatewarga',['warga' => $wargas->id]) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') ?? $wargas->nik }}">
                                @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('nokk') is-invalid @enderror" id="nokk" name="nokk" value="{{ old('nokk') ?? $wargas->nokk }}">
                                @error('nokk')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender') ?? $wargas->gender }}">
                                @error('gender')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $wargas->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{ old('rt') ?? $wargas->rt }}">
                                @error('rt')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{ old('rw') ?? $wargas->rw }}">
                                @error('rw')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="passwordwarga">Password</label>
                                <input type="text" class="form-control @error('passwordwarga') is-invalid @enderror" id="passwordwarga" name="passwordwarga" value="{{ old('passwordwarga') ?? $wargas->passwordwarga == '' ? '' : '*************' }}">
                                @error('passwordwarga')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomorhp">Nomor HP</label>
                                <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" id="nomorhp" name="nomorhp" value="{{ old('nomorhp') ?? $wargas->nomorhp }}">
                                @error('nomorhp')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea rows="3" class="form-control" id="alamat" name="alamat">{{ old('alamat') ?? $wargas->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="Tidak Terpapar Covid" {{ (old('status') ?? $wargas->status)=='Tidak Terpapar Covid' ? 'selected': '' }} > Tidak Terpapar Covid
                                    </option>
                                    <option value="Sedang Terpapar Covid" {{ (old('status') ?? $wargas->status)=='Sedang Terpapar Covid' ? 'selected': '' }} > Sedang Terpapar Covid
                                    </option>
                                    <option value="Pernah Terpapar Covid" {{ (old('status') ?? $wargas->status)=='Pernah Terpapar Covid' ? 'selected': '' }} > Pernah Terpapar Covid
                                    </option>
                                </select>                               
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>       
                            <button type="submit" class="btn btn-primary mb-2">UBAH</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>