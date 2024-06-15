@extends('layoutsadmin.dashboardadmin')

@section('title', 'Daftar User')

@section('content')
<div class="container">
    <h1 class="mt-5">Daftar User</h1>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Foto KTP</th>
                <th>Profile Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nik }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->nama_lengkap }}</td>
                    <td>{{ $user->tanggal_lahir }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $user->foto_ktp) }}" alt="Foto KTP" class="img-fluid image-popup" data-src="{{ asset('storage/' . $user->foto_ktp) }}" width="100">
                    </td>
                    <td>
                        @if($user->profile_picture)
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="img-fluid image-popup" data-src="{{ asset('storage/' . $user->profile_picture) }}" width="100">
                        @else
                            No Picture
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('delete.user', ['user' => $user->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
@endsection
