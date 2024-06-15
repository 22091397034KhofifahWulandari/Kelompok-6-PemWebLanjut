@extends('layoutsadmin.dashboardadmin')

@section('title', 'Admin - Semua Aduan')

@section('content') 
<main>
    <div class="container py-4">
        <h2 class="text-2xl font-semibold mb-4">Daftar Aduan</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi Laporan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Tanggal Pengaduan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Response</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduans as $pengaduan)
                <tr>
                    <td>{{ $pengaduan->judul }}</td>
                    <td>{{ $pengaduan->isi_laporan }}</td>
                    <td>
                        @if($pengaduan->foto)
                            <img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Aduan" class="img-thumbnail image-popup" style="width: 100px;">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ $pengaduan->tanggal_pengaduan }}</td>
                    <td>
                        <form action="{{ route('admin.pengaduan.update', $pengaduan->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="response" value="{{ $pengaduan->response }}">
                            <select name="status" class="form-control" onchange="this.form.submit()">
                                <option value="pending" {{ $pengaduan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="in-progress" {{ $pengaduan->status == 'in-progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="resolved" {{ $pengaduan->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.pengaduan.update', $pengaduan->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="{{ $pengaduan->status }}">
                            <textarea name="response" class="form-control" rows="1" onchange="this.form.submit()">{{ $pengaduan->response }}</textarea>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.pengaduan.destroy', $pengaduan->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection