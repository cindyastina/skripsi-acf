<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <title>Document</title>
</head>
<body>
<!-- MENU Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ACF System</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"
                    >Dashboard</a
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Master
                    </a>
                    <ul
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="#">Role Admin</a></li>
                        <li><a class="dropdown-item" href="#">Karyawan</a></li>
                        <li><a class="dropdown-item" href="{{route("admin.zones.index")}}">Daerah</a></li>
                        <li><a class="dropdown-item" href="#">Customer</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("admin.items.index")}}">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Penjualan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Isi Section -->

<div class="container mt-5">
    @yield('content')
</div>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
