@extends('layoutspartai.dashboardpartai')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Portofolio</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('portofolio.update', $portofolio->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $portofolio->jabatan }}" required>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            @if($portofolio->foto)
                                <img src="{{ asset('storage/' . $portofolio->foto) }}" alt="Foto" style="max-width: 100px;">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $portofolio->nama_lengkap }}" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="laki-laki" {{ $portofolio->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ $portofolio->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="{{ $portofolio->tempat_tanggal_lahir }}" required>
                        </div>

                        <div class="form-group">
                            <label for="partai">Partai</label>
                            <input type="text" class="form-control" id="partai" name="partai" value="{{ $portofolio->partai }}" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $portofolio->alamat }}" required>
                        </div>

                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" value="{{ $portofolio->kota }}" required>
                        </div>

                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $portofolio->provinsi }}" required>
                        </div>

                        <div class="form-group">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ $portofolio->kode_pos }}" required>
                        </div>

                        <div class="form-group">
                            <label for="visi_misi">Visi Misi</label>
                            <textarea class="form-control" id="visi_misi" name="visi_misi" required>{{ $portofolio->visi_misi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{ $portofolio->pendidikan }}" required>
                        </div>

                        <div class="form-group">
                            <label for="pengalaman_kerja">Pengalaman Kerja</label>
                            <input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja" value="{{ $portofolio->pengalaman_kerja }}" required>
                        </div>

                        <div class="form-group">
                            <label for="organisasi">Organisasi</label>
                            <input type="text" class="form-control" id="organisasi" name="organisasi" value="{{ $portofolio->organisasi }}" required>
                        </div>

                        <div class="form-group">
                            <label for="prestasi">Prestasi</label>
                            <input type="text" class="form-control" id="prestasi" name="prestasi" value="{{ $portofolio->prestasi }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
