<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
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
                background-color:#23408e;
            }
            .content {
                max-width: 80%; 
                margin: 0 auto !important; 
                float: none !important;  
                color:#23408e;
                padding-top: 15%;      
            }
            .container{
                background-color:#cccccc;
            }
            .btn{
                background-color:#23408e;
                color:#ffffff;
                margin-right: 1%;
                margin-top: 1%;
                margin-bottom: 1%;
            }
            .btn:hover{
                color:#ffffff;
                background-color: #ba0d14;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-4 d-flex align-items-center">
                            <a class="btn btn-info" role="button" href="{{route('loginwarga.index3')}}">Masuk Sebagai Warga</a></button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="py-4 d-flex align-items-center">
                            <a class="btn btn-info" role="button" href="{{route('loginketua.index2')}}">Masuk Sebagai Ketua RT</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>