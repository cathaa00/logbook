<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login Logbook MBKM</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif !important;
            background: #F8FAFB;
        }
    </style>
</head>
<body>
    <section class="pb-0">
        <img src="asset/sleder-tengah.png" class="image-left-login" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="d-flex align-items-center">
                        <div class="mr-3">
                            <img src="asset/univ-logo.png" width="180" alt="">
                        </div>
                        <div>
                            <img src="asset/logo-kampusmerdeka.png" width="100" alt="">
                        </div>
                    </div>
                    <h3 class="fw-medium mt-4" style="line-height: 45px;">  
                        Program Kompetisi Kampus Merdeka<br>
                        Fakultas Peternakan<br>
                        Universitas Gadjah Mada
                    </h3>
                    <div class="mt-3">
                        <a href="index.html" class="btn btn-blue-strong px-4">
                            <i class="fa fa-angle-left mr-1"></i>
                            Website MBKM
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="box p-5 mt-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <h4 class="fw-bold text-center">
                            Login Form Logbook
                        </h4>
                        @error('email') 
                        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @enderror
                        <div class="mt-5">
                            <label class="fw-medium">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mt-4">
                            <label class="fw-medium">Kata Sandi</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan kata sandi">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pointer"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="d-flex mt-2">
                            <div class="ml-auto">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-primary-color btn btn-link">Lupa Kata Sandi?</a>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
                        </div>
                        <div class="gray-separator my-4">
                            <div class="text">
                                Atau
                            </div>
                        </div>
                        <div class="text-center">
                            <span>Belum mempunyai akun?</span> 
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="fw-medium text-primary-color">Daftar</a>
                            @endif
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</html>