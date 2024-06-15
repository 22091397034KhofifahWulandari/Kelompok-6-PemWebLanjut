@extends('layoutspartai.dashboardpartai')

@section('title', 'Daftar Pelaporan')

@section('content')
<div class="content">
    <div class="navbar">
        <h4>Daftar Semua Pelaporan</h4>
        <div class="user-info">
            <span style="font-weight: bold; margin-right: 10px">{{ Auth::user()->username }}</span>
            <img src="{{ asset('images/user.svg') }}" alt="User Image">
        </div>
    </div>

    <div class="form-container mt-4" style="margin-left: -250px; margin-right: auto;">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>Metode</th>
                    <th>Tempat</th>
                    <th>Tanggal</th>
                    <th>Jumlah Peserta</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $index => $report)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $report->kegiatan }}</td>
                    <td>{{ $report->metode }}</td>
                    <td>{{ $report->tempat }}</td>
                    <td>{{ $report->tanggal }}</td>
                    <td>{{ $report->jumlah_peserta }}</td>
                    <td>{{ $report->status }}</td>
                    <td>
                        <a href="{{ route('partai.pelaporan.edit', $report->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('partai.pelaporan.destroy', $report->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
