<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* CSS untuk Halaman Dashboard */
        .container {
            margin-top: 50px;
        }
        .table {
            margin-top: 20px;
        }
        .btn-primary,
        .btn-danger {
            margin-right: 5px;
        }

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.nav {
    list-style: none;
    padding: 0;
    margin: 0;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.nav-item {
    margin: 0;
}

.nav-link {
    padding: 10px 20px;
    color: #333;
    text-decoration: none;
}

.nav-link:hover {
    background-color: #ddd;
}

.submenu {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-top: 5px;
}

.nav-item:hover .submenu {
    display: block;
}

.submenu li {
    margin: 5px 0;
}

.submenu a {
    display: block;
    padding: 5px;
    color: #333;
    text-decoration: none;
}

.submenu a:hover {
    background-color: #ddd;
}

    </style>
    <!-- Include your CSS and JS files here -->
</head>
<body>
    <header>
        <!-- Include your header content here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Include your footer content here -->
    </footer>
</body>
</html>
