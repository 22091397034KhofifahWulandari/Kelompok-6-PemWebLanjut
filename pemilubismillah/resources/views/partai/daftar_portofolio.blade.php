@extends('layoutspartai.dashboardpartai')

@section('title', 'Daftar Portofolio')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">Daftar Portofolio</div>

                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tempat Tanggal Lahir</th>
                                    <th scope="col">Partai</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Kode Pos</th>
                                    <th scope="col">Visi Misi</th>
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Pengalaman Kerja</th>
                                    <th scope="col">Organisasi</th>
                                    <th scope="col">Prestasi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reports as $portofolio)
                                    <tr>
                                       
                                        <td>{{ $portofolio->jabatan }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $portofolio->foto) }}" alt="Foto" style="max-width: 100px;">
                                        </td>
                                        <td>{{ $portofolio->nama_lengkap }}</td>
                                        <td>{{ $portofolio->jenis_kelamin }}</td>
                                        <td>{{ $portofolio->tempat_tanggal_lahir }}</td>
                                        <td>{{ $portofolio->partai }}</td>
                                        <td>{{ $portofolio->alamat }}</td>
                                        <td>{{ $portofolio->kota }}</td>
                                        <td>{{ $portofolio->provinsi }}</td>
                                        <td>{{ $portofolio->kode_pos }}</td>
                                        <td>{{ $portofolio->visi_misi }}</td>
                                        <td>{{ $portofolio->pendidikan }}</td>
                                        <td>{{ $portofolio->pengalaman_kerja }}</td>
                                        <td>{{ $portofolio->organisasi }}</td>
                                        <td>{{ $portofolio->prestasi }}</td>
                                        <td>
                                            <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // Fungsi untuk mengatur posisi tombol "Geser ke Kanan" saat digulir
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var navHeight = $('.sidebar').height();
            if (scroll >= navHeight) {
                $('#geser-ke-kanan').addClass('fixed');
            } else {
                $('#geser-ke-kanan').removeClass('fixed');
            }
        });
    </script>
@endsection