<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
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
            margin: 120px auto 20px auto;
            margin-left: 25%;
        }
        .logout-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div>
            <h2 class="text-center">Dashboard Admin</h2>
            
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.userlist') }}">User</a>
            <a href="{{ route('admin.partailist') }}">Partai</a>
            <a href="{{ route('admin.pengaduan.index') }}">Pengaduan</a>
            
            
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    <div class="content">
        @yield('content')
    </div>

    <!-- Modal HTML -->
    <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photoModalLabel">Foto User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Foto Aduan">
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.image-popup').on('click', function() {
                var src = $(this).data('src');
                $('#modalImage').attr('src', src);
                $('#photoModal').modal('show');
            });
        });
    </script>
</body>
</html>
