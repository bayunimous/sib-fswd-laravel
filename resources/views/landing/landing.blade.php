<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <!-- Tambahkan link stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing') }}">PHP Native | CRUD</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('siswa.index') }}">Data Siswa</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="hero-title">Welcome to Laravel</h1>
            <p class="hero-subtitle">A powerful PHP framework for web artisans</p>
        </div>
    </section>
    <!-- Close Hero Section -->

    <!-- Siswa Section -->
    <section class="siswa">
        <div class="container">
            <h2 class="siswa-title">Data Siswa</h2>
            <div class="siswa-list">
                @foreach ($siswa as $row)
                <div class="siswa-item">
                    <h3 class="siswa-name">{{ $row->nama }}</h3>
                    <p class="siswa-email">{{ $row->email }}</p>
                    <p class="siswa-umur">{{ $row->umur }} Tahun</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Close Siswa Section -->

    <!-- Tambahkan link script JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
