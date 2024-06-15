<!-- resources/views/admin/dashboard.blade.php -->
@extends('layoutsadmin.dashboardadmin')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">
            <h1 class="card-title display-4">Welcome, <span id="username" class="text-primary">{{ Auth::guard('admin')->user()->username }}</span>!</h1>
            <p class="card-text lead">You are logged in as an admin. What would you like to do today?</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah User</h5>
                    <p class="card-text display-4">33</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Admin</h5>
                    <p class="card-text display-4">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Partai</h5>
                    <p class="card-text display-4">7</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Calon Presiden</h5>
                    <p class="card-text display-4">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Calon DPD</h5>
                    <p class="card-text display-4">6</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Calon DPR</h5>
                    <p class="card-text display-4">5</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Calon DPRD I</h5>
                    <p class="card-text display-4">6</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Calon DPRD II</h5>
                    <p class="card-text display-4">6</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

