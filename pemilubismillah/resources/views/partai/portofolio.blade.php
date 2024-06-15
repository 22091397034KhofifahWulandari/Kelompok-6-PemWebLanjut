@extends('layoutspartai.dashboardpartai')

@section('title', 'Portofolio')

@section('content')
    <h1>Portofolio</h1>
    <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <div class="form-group">
            <label for="jabatan">Pilih Jabatan</label>
            <select name="jabatan" id="jabatan" class="form-control" required>
                <option value="">-- Pilih Jabatan --</option>
                <option value="DPR">DPR</option>
                <option value="DPD">DPD</option>
                <option value="DPRD I">DPRD I</option>
                <option value="DPRD II">DPRD II</option>
            </select>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
            <input type="text" name="tempat_tanggal_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="partai">Partai</label>
            <input type="text" name="partai" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" name="kota" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="visi_misi">Visi & Misi</label>
            <textarea name="visi_misi" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="pendidikan">Pendidikan</label>
            <textarea name="pendidikan" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="pengalaman_kerja">Pengalaman Kerja</label>
            <textarea name="pengalaman_kerja" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="organisasi">Organisasi</label>
            <textarea name="organisasi" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="prestasi">Prestasi</label>
            <textarea name="prestasi" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="validasi" required>
            <label class="form-check-label" for="validasi">Pastikan sudah mengisi formulir dengan benar dan valid</label>
        </div>
        <button type="submit" class="btn btn-danger mt-3">Kirim</button>
    </form>
@endsection
