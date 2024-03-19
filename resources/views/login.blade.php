<!doctype html>
<html lang="en">
     <head>
        <meta charset="UTF-8">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('masuk/') }}/images/fav-icon/icon.png">
        <!-- Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('masuk/') }}/css/bootstrap.min.css">
        <!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('masuk/') }}/css/style.css">
        <!-- Fix Internet Explorer ______________________________________-->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Login Page -->
        <div class="container-fluid login-1">
            <div class="container">
                <div class="login-form">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="{{ asset('masuk/') }}/images/login-img.png" class="back-img" title="login" alt="welcome image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="login-box">
                                @if (session()->has('success'))
                <div class="mt-2 alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                                <form action="{{ route('login.post') }}" method="POST">
    @csrf
                                    <div class="form-group">
                                        <h4 class="login-title">Welcome back</h4>
                                        <p class="login-p">Please login to your account.</p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Enter Email" class="form-control">
                                        <input type="password" name="password" placeholder="Enter your password" class="form-control">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                        <p class="mb-0"> <a href="{{ route('registrasi') }}">New User? Sign Up</a></p>

                                    </div>
                                </form>
                                <div class="text-center">

                                    <a href="/" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Page -->
    </body>
</html>

