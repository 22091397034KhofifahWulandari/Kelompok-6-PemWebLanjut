@extends('layoutsadmin.dashboardadmin')

@section('title', 'Daftar Partai')

@section('content')
<div class="container">
    <h1 class="mt-5">Daftar Partai</h1>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partais as $partai)
                <tr>
                    <td>{{ $partai->id }}</td>
                    <td>{{ $partai->username }}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <form action="#" method="POST" style="display:inline;">
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
@endsection
