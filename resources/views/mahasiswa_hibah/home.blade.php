<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <nav>
        <div class="page-sidebar-layout">
            <!--Desktop-->
            <div class="page-sidebar d-none d-lg-block">
                <div class="d-flex align-items-center">
                    <div class="mr-2">
                        <img src="asset/univ-logo.png" width="110px" alt="">
                    </div>
                    <div>
                        <img src="asset/logo-kampusmerdeka.png" width="90px" alt="">
                    </div>
                </div>
                <ul class="sidebar-menu" id="system-menu" id="system-menu">  
                    <li class="sidebar-menu-list has-child active">
                        <a href="dashboard_mahasiswa.html" class="has-child sidebar-menu-link">
                            <img src="asset/menu_dashboard.png" width="18" class="mr-2" alt="">
                            <span>
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-list has-child">
                        <a href="mahasiswa_hibah/input_logbook" class="has-child sidebar-menu-link">
                            <img src="asset/menu_addlogbook.png" width="24" class="mr-2" alt="">
                            <span>
                                Input Logbook
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-list has-child">
                        <a href="list_logbook_magang.html" class="has-child sidebar-menu-link">
                            <img src="asset/menu_listlogbook.png" width="22" class="mr-2" alt="">
                            <span>
                                List Logbook
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <!--Mobile-->
            <div class="navbar navbar-dark bg-white navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom">
                <ul class="navbar-nav nav-justified w-100">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <img src="asset/menu_dashboard.png" width="24">
                        <span class="small d-block">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="mahasiswa_hibah/input_logbook" class="nav-link">
                        <img src="asset/menu_addlogbook.png" width="24">
                        <span class="small d-block">Input Logbook</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                          <img src="asset/menu_listlogbook.png" width="24">
                          <span class="small d-block">List Logbook</span>
                      </a>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>

    <!--Konten/isi-->
    <section>
        <div class="page-sidebar-layout">
            <div class="page-content">
                <!--desktop-->
                <div class="page-body d-none d-lg-block">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box border-3 mt-4 ">
                                <h5 class="mb-0 fw-bold">
                                    Profil Anda
                                </h5>
                                <div class="mt-1 text-gray400">
                                    Demi kelancaran proses monitoring pastikan data diri anda sesuai
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <label class="fw-medium mb-2">Program Kampus Merdeka</label>
                                        <div class="mt-1 text-gray400">
                                        {{ Auth()->user()->program }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fw-medium mb-2">Sub Program</label>
                                        <div class="mt-1 text-gray400">
                                        {{ Auth()->user()->sub_program }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label class="fw-medium mb-2">Nama</label>
                                        <div class="mt-1 text-gray400">
                                        {{ Auth()->user()->name }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label class="fw-medium mb-2">Nomer Induk Mahasiswa</label>
                                        <div class="mt-1 text-gray400">
                                        {{ Auth()->user()->nim }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label class="fw-medium mb-2">Email</label>
                                        <div class="mt-1 text-gray400">
                                        {{ Auth()->user()->email }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label class="fw-medium mb-2">Program Studi</label>
                                        <div class="mt-1 text-gray400">
                                        {{ Auth()->user()->program_studi }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label class="fw-medium">Password</label>
                                        <input type="password" id="password-field" class="form-control" placeholder="*********">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pointer"></span>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label class="fw-medium">Masukkan Ulang Password</label>
                                        <input type="password" id="password-field" class="form-control" placeholder="*********">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pointer"></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <a href="add_logbook_magang.html" class="btn btn-blue-strong btn-block">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-4 ">
                                <div class="card-header py-3">
                                    <div class="mt-1">
                                        Selamat Datang Kembali
                                    </div>
                                    <h5 class="mb-0 fw-bold text-coco">
                                    {{ Auth()->user()->name }}
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 mt-3 mb-4" style="width: 25rem;"
                                            src="asset/sleder-tengah.png" alt="...">
                                    </div>
                                    <p>Apakah Kamu sudah mengisi logbook hari ini?</p>
                                </div>
                                <div class="mt-4">
                                    <a href="{{ route('logout') }}" class="btn btn-coco btn-block btn-lg">
                                        <img src="asset/menu_keluar_active.png" class="mr-2" width="24">
                                        <span>keluar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--mobile-->
            </div>
        </div>
    </section>

    <footer>
        <!--Desktop-->
        <div class="footer-dashboard d-none d-lg-block">
            <div class="d-flex">
                <div>
                    © 2021 By Cathaa Group
                </div>
                <div class="ml-auto">
                    <ul class="footer-menu">
                        <li class="mr-4">
                            <a href="" class="text-white">Tentang Kami</a>
                        </li>
                        <li class="mr-4">
                            <a href="" class="text-white">Terms &amp; Conditions</a>
                        </li>
                        <li>
                            <a href="" class="text-white">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Mobile-->
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>