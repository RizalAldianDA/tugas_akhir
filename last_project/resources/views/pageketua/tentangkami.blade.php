<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ url('') }}/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Akun Warga</title>
        <!--Link-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/base-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-responsive-min.css">
  
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                background-color: #cccccc;
            }
            .row{
                background-color: white;
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

            .main-text {
                    text-align: justify;
                    max-width: 100%;
                }

            .main-text p {
                    white-space: pre-wrap;       /* Since CSS 2.1 */
                    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
                    white-space: -pre-wrap;      /* Opera 4-6 */
                    white-space: -o-pre-wrap;    /* Opera 7 */
                    word-wrap: break-word;       /* Internet Explorer 5.5+ */
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                    text-align: justify;
                    color: #23408e;
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
                                    <a href="{{route('warga.index')}}">DAFTAR WARGA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('warga.addwarga')}}">TAMBAH WARGA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active" style="background-color: #cccccc" href="{{route('pageketua.tentangkami')}}">TENTANG KAMI</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <button class="dropbtn">PENGATURAN <i class="fa fa-caret-down"></i></button>
                                        <div class="dropdown-content">
                                            <div class="dropdown-content">
                                                <a href="{{route('pageketua.profilketua',['ketua' => session()->get('nik')])}}">PROFIL</a>
                                                <a href="{{route('loginketua.logout')}}">KELUAR</a>
                                            </div>
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
                        @if($info == null)
                        @else
                        <div class="py-4 d-flex justify-content-end align-items-center">
                            <h2 class="mr-auto">{{$info->title}}</h2>
                        </div>
                        @if(session()->has('pesan'))
                        <div class="alert alert-success">
                            {{ session()->get('pesan') }}
                        </div>
                        @endif
                            <pre class='main-text'><p>{{$info->description}}</p></pre>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>