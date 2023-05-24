<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .siswa-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 40px;
        }

        .siswa-card {
            width: 200px;
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .siswa-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .siswa-email {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }

        .siswa-link {
            color: #007bff;
            text-decoration: none;
        }

        .menu {
            margin-top: 20px;
        }

        .menu a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 5px;
            border-radius: 4px;
            background-color: #eee;
        }

        .menu a:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang di Halaman Landing</h1>
        <div class="siswa-list">
            @foreach ($siswa as $item)
            <div class="siswa-card">
                <div class="siswa-name">{{ $item->nama }}</div>
                <div class="siswa-email">{{ $item->email }}</div>
                <a class="siswa-link" href="{{ route('siswa.show', $item->id) }}">Detail</a>
            </div>
            @endforeach
        </div>

        <div class="menu">
            <a href="{{ route('dashboard') }}">Go to Dashboard</a>
            <a href="{{ route('siswa.index') }}">Go to User Page</a>
        </div>
    </div>
</body>

</html>
