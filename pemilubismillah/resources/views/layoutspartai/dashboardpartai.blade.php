<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .logout-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 10px;
            width: 50%;
            text-align: center;
            margin: 20px auto;
            margin-left: 25%;
        }
        .logout-btn:hover {
            background-color: darkred;
        }
        .document-image {
            width: 100px;
            height: auto;
        }
        .fixed {
            position: fixed;
            top: 20px; /* Adjust the distance from the top as needed */
            right: 20px; /* Adjust the distance from the right as needed */
            z-index: 999; /* Ensure the button stays above other content */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div>
            <h2 class="text-center">Dashboard Partai</h2>
            <a href="{{ route('partai.dashboard') }}">Dashboard</a>
            <a href="{{ route('partai.beranda-parpol') }}">Upload Berkas</a>
            <a href="{{ route('partai.daftar-caleg-registrasi') }}">Daftar Caleg Sudah Upload Berkas</a>
            <a href="{{ route('partai.pelaporan') }}">Pelaporan</a>
            <a href="{{ route('partai.daftar-pelaporan') }}">Daftar Pelaporan</a>
            <a href="{{ route('partai.portofolio') }}">Upload Portofolio</a>
            <a href="{{ route('partai.daftar_portofolio') }}">Daftar Portofolio</a>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>