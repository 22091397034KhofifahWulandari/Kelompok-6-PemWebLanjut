@extends('layoutsuser.homeuser')

@section('title', 'Buat Aduan')

@section('contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Aduan</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Aduan</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="isi_laporan">Isi Laporan</label>
                            <textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
                            <input type="date" class="form-control" id="tanggal_pengaduan" name="tanggal_pengaduan" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
