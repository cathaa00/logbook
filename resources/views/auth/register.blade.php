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
    <title>Form Pendaftaran Logbook MBKM</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif !important;
            background: #F8FAFB;
        }
    </style>
</head>
<body>
    <section class="pt-0 pb-0">
        <img src="asset/sleder-tengah.png" class="image-left" width="100%" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-5">
                    <div class="d-flex align-items-center">
                        <div class="mr-3">
                            <img src="asset/univ-logo.png" width="180" alt="">
                        </div>
                        <div>
                            <img src="asset/logo-kampusmerdeka.png" width="100" alt="">
                        </div>
                    </div>
                    <h4 class="fw-medium mt-4" style="line-height: 40px;">  
                        Program Kompetisi<br>
                        Kampus Merdeka<br>
                        Fakultas Peternakan<br>
                        Universitas Gadjah Mada
                    </h4>
                    <div class="mt-3">
                        <a href="index.html" class="btn btn-blue-strong px-4">
                            <i class="fa fa-angle-left mr-1"></i>
                            Website MBKM
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="box">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <h4 class="fw-bold text-center">
                            Form Pendaftaran Logbook
                        </h4>
                        @error('email') 
                        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @enderror
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <label class="fw-medium mb-2">Program Kampus Merdeka</label>
                                <select id="program" type="text" class="form-control @error('program') is-invalid @enderror" name="program" value="{{ old('program') }}" required autocomplete="sprogram" autofocus>
                                    <option disabled selected value="">Select program</option>
                                    <option value="HIBAH">Hibah Wirausaha</option>
                                    <option value="WORKSHOP">Workshop Wirausaha</option>
                                    <option value="MAGANG">Magang</option>
                                </select>
                                @error('program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="fw-medium mb-2">Sub Program</label>
                                <input id="sub_program" type="text" class="form-control @error('sub_program') is-invalid @enderror" name="sub_program" value="{{ old('sub_program') }}" required autocomplete="sub_program" autofocus placeholder="Masukkan Sub Program">
                                <div class="mt-1 text-gray400">
                                    <small>Example: <b>Hibah Wirausaha</b></small>
                                </div>
                                @error('sub_program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="fw-medium mb-2">Nama</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan nama">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="fw-medium mb-2">Nomer Induk Mahasiswa</label>
                                <input id="nim" type="nim" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" placeholder="Masukkan no induk">
                                <div class="mt-1 text-gray400">
                                    <small>Example: <b>18/123456/PT/123456</b></small>
                                </div>
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="fw-medium mb-2">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="fw-medium mb-2">Program Studi</label>
                                <input id="program_studi" type="text" class="form-control @error('program_studi') is-invalid @enderror" name="program_studi" value="{{ old('program_studi') }}" required autocomplete="program_studi" placeholder="Masukkan Program Studi">
                                @error('program_studi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="fw-medium">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan passwod">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pointer"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="fw-medium">Masukkan Ulang Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan ulang passwod">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pointer"></span>
                            </div>
                            <div class="col-md-6 mt-4">
                            <label class="fw-medium mb-2">Role</label>
                                <select id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role">
                                    <option disabled selected value="">Select Role</option>
                                    <option value="mahasiswa_hibah">Hibah Wirausaha</option>
                                    <option value="mahasiswa_magang">Workshop Wirausaha</option>
                                    <option value="mahasiswa_workshop">Magang</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Daftar</button>>
                        </div>
                        <div class="gray-separator my-4">
                            <div class="text">
                                Atau
                            </div>
                        </div>
                        <div class="text-center">
                            <span>Sudah mempunyai akun?</span> <a href="{{ route('login') }}" class="fw-medium text-primary-color">Login</a>
                        </div>
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

        $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".filter").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".filter").hide();
                    }
                });
            }).change();
        });
    </script>
</html>