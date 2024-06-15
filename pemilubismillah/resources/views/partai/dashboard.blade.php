@extends('layoutspartai.dashboardpartai')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">
            <h1 class="card-title display-4">
                Welcome, Partai <span id="username" class="text-primary">{{ Auth::guard('partai')->user()->username }}</span>!
            </h1>
            <p class="card-text lead">You are logged in as an partai. What would you like to do today?</p>
        </div>
    </div>
</div>
@endsection