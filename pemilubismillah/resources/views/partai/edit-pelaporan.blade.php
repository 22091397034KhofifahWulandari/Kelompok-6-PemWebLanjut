@extends('layoutspartai.dashboardpartai')

@section('title', 'Edit Pelaporan')

@section('content')
<div class="content">
    <div class="navbar">
        <h4>Edit Pelaporan</h4>
        <div class="user-info">
            <span style="font-weight: bold; margin-right: 10px">{{ Auth::user()->username }}</span>
            <img src="{{ asset('images/user.svg') }}" alt="User Image">
        </div>
    </div>

    <div class="form-container mt-4" style="margin-left: -250px; margin-right: auto;">
        <form action="{{ route('partai.pelaporan.update', $report->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="kegiatan">Kegiatan</label>
                <input type="text" name="kegiatan" class="form-control" value="{{ $report->kegiatan }}" required>
            </div>

            <div class="form-group">
                <label for="metode">Metode</label>
                <input type="text" name="metode" class="form-control" value="{{ $report->metode }}" required>
            </div>

            <div class="form-group">
                <label for="tempat">Tempat</label>
                <input type="text" name="tempat" class="form-control" value="{{ $report->tempat }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $report->tanggal }}" required>
            </div>

            <div class="form-group">
                <label for="jumlah_peserta">Jumlah Peserta</label>
                <input type="number" name="jumlah_peserta" class="form-control" value="{{ $report->jumlah_peserta }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="{{ $report->status }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
