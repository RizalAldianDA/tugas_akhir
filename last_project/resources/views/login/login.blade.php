<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ url('') }}/last_project/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Login Admin</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Login</h2>
                    </div>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                    @endif
                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="usernameadmin">Username</label>
                            <input type="text"
                            class="form-control @error('usernameadmin') is-invalid @enderror"
                            id="usernameadmin" name="usernameadmin" value="{{ old('usernameadmin') }}">
                            @error('usernameadmin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="passwordadmin">Password</label>
                            <input type="password"
                            class="form-control @error('passwordadmin') is-invalid @enderror"
                            id="passwordadmin" name="passwordadmin" value="{{ old('passwordadmin') }}">
                            @error('passwordadmin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
