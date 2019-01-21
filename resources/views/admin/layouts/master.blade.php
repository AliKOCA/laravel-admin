<!DOCTYPE html>
<html lang="tr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KenarKöşe İçerik Yönetim Sistemi</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-4.1.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootadmin.min.css') }}" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="#">KenarKöşe Yönetim Paneli</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 0</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 0</a></li>
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ali KOCA</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            <li><a href="/admin/seo"><i class="fa fa-fw fa-link"></i> SEO</a></li>
            <li><a href="/admin/users"><i class="fa fa-fw fa-link"></i> Kullanıcı İşlemleri</a></li>
            <li><a href="/admin/menus"><i class="fa fa-fw fa-link"></i> Menüler</a></li>
            <li><a href="/admin/pages"><i class="fa fa-fw fa-link"></i> Sayfalar</a></li>
            <li>
                <a href="#sm_expand_1" data-toggle="collapse">
                    <i class="fa fa-fw fa-link"></i> Diğer İşlemler
                </a>
                <ul id="sm_expand_1" class="list-unstyled collapse">
                    <li><a href="/admin/islem-1">İşlem 1</a></li>
                    <li><a href="/admin/islem-2">İşlem 2</a></li>
                </ul>
            </li>            
        </ul>
    </div>

    <div class="content p-4">
        <h2 class="mb-4">Blank/Starter</h2>

        <div class="card mb-4">
            <div class="card-body">
            Muhteviyat Burada
               @yield('content')
            </div>
        </div>
    </div>
</div>   

<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ asset('bootstrap-4.1.3-dist/js/bootstrap.min.js') }}" defer></script>    
<script src="{{ asset('bootstrap-4.1.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>    
<script src="{{ asset('admin/js/bootadmin.min.js') }}" defer></script>     
</body>
</html>