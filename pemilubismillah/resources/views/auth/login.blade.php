@extends('layouts.loginnavbar')

@section('content')
<div class="login-container">
    <a href="{{ route('home') }}" class="btn btn-light btn-sm" style="float: right;">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="d-flex align-items-center mb-3">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid mr-3" style="max-height: 80px;">
        <h3>Login</h3>
    </div>
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
                <option value="partai">Partai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="identifier">Identifier</label>
            <input type="text" class="form-control" id="identifier" name="identifier" required placeholder="Username or NIK">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="input-group-append">
                    <span class="input-group-text password-toggle-btn" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block">Login</button>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    <div class="text-center mt-3">
        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>

@endsection
