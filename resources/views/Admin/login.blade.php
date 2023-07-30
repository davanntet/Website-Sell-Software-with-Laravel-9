
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script>
        function delete_row(e)
        {
            e.parentNode.parentNode.removeChild(e.parentNode);
        }
    </script>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <form action="{{ route('admin.login.post') }}" method="POST" class="container-fluid">

            @csrf
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                @if(Session::has('success'))
            <div class="alert alert-success" style="font-size: 9"><em style="font-size: 12px !important">{!! session('success') !!}</em>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" onClick="delete_row(this)"><span aria-hidden="true">&times</span></button>
            </div>
            @endif
            @if(Session::has('errors'))
            <div class="alert alert-danger"><em style="font-size: 12px !important">{!! $errors->first() !!}</em>
                <button type="button" class="close"  data-dismiss="alert" aria-label="Close" onClick="delete_row(this)"><span aria-hidden="true">&times</span></button>
            </div>
            @endif
            @if(Session::has('message'))
            <div class="alert alert-success"><em style="font-size: 12px !important">{!! session('message') !!}</em>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" onClick="delete_row(this)"><span aria-hidden="true">&times</span></button>
            </div>
            @endif
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>Admin Login</h3>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                        </div>
                        <div class="form-group row" style="transform:translateX(-100px)">
                                <div class="col-md-7 offset-md-4 offset-sm-4 offset-4">
                                    <div class="checkbox" > 
                                        <label>
                                            <input type="checkbox" name="remember" value="1" id='remember'> <label for="remember">Remember Me</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <br>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>

                    </div>
                </div>
            </div>
        </form>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>