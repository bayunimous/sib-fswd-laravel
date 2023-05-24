<!-- Halaman Dashboard -->
@extends('layouts.app')

@section('content')
<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* CSS styling for the dashboard */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            background: #333;
            color: #fff;
            width: 200px;
            height: 100vh;
            padding: 20px;
        }

        .sidebar h3 {
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li.menu-item a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
        }

        .sidebar li.menu-item a:hover {
            background: #555;
        }

        .sidebar li.menu-item ul.submenu {
            list-style: none;
            padding-left: 20px;
            display: none;
        }

        .sidebar li.menu-item:hover ul.submenu {
            display: block;
        }

        .content {
            padding: 20px;
        }

        /* CSS styling for the submenu arrow icon */
        .sidebar li.menu-item > a::after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f105";
            float: right;
            margin-top: 2px;
        }

        .sidebar li.menu-item:hover > a::after {
            content: "\f107";
        }

        /* CSS styling for the active menu item */
        .sidebar li.menu-item.active a {
            background: #555;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Dashboard</h3>
        <ul>
            <li class="menu-item active">
                <a href="#">Produk</a>
                <ul class="submenu">
                    <li><a href="#">Kategori</a></li>
                    <li><a href="{{ route('siswa.index') }}">Daftar Siswa</a></li>
                </ul>
            </li>
            <li class="menu-item active">
                <a href="#">Pengguna</a>
                <ul class="submenu">
                    <li><a href="#">Grup Pengguna</a></li>
                    <li><a href="#">Daftar Pengguna</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Content -->
    <div class="content">
        <!-- Content area -->
        <h1>Welcome to Dashboard</h1>
        <!-- Your dynamic content goes here -->
    </div>

    <script>
        // JavaScript for handling submenu toggle
        const submenuItems = document.querySelectorAll('.sidebar li.menu-item');
        submenuItems.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
    </script>
</body>
</html>

@endsection
