@extends('layoutspartai.dashboardpartai')

@section('content')
<div class="content">
    <div class="navbar">
        <h4>Edit Caleg</h4>
        <div class="user-info">
            <span style="font-weight: bold; margin-right: 10px">{{ Auth::user()->username }}</span>
            <img src="{{ asset('images/user.svg') }}" alt="User Image">
        </div>
    </div>
    <div class="form-container" style="margin-left: -250px; margin-right: auto;">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('partai.update', $candidate->id) }}" method="POST" >
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $candidate->name }}" required>
            </div>

            <div class="form-group">
                <label for="position">Posisi</label>
                <input type="text" name="position" class="form-control" value="{{ $candidate->position }}" required>
            </div>

            <div class="form-group">
                <label for="formulir">Formulir</label>
                <input type="file" name="formulir" class="form-control">
                @if ($candidate->formulir)
                    <p>Current Formulir: <a href="{{ Storage::url($candidate->formulir) }}" target="_blank">{{ $candidate->formulir }}</a></p>
                @endif
            </div>

            <div class="form-group">
                <label for="ktp">KTP</label>
                <input type="file" name="ktp" class="form-control">
                @if ($candidate->ktp)
                    <p>Current KTP: <a href="{{ Storage::url($candidate->ktp) }}" target="_blank">{{ $candidate->ktp }}</a></p>
                @endif
            </div>

            <div class="form-group">
                <label for="ijazah">Ijazah</label>
                <input type="file" name="ijazah" class="form-control">
                @if ($candidate->ijazah)
                    <p>Current Ijazah: <a href="{{ Storage::url($candidate->ijazah) }}" target="_blank">{{ $candidate->ijazah }}</a></p>
                @endif
            </div>

            <div class="form-group">
                <label for="surat_pernyataan">Surat Pernyataan</label>
                <input type="file" name="surat_pernyataan" class="form-control">
                @if ($candidate->surat_pernyataan)
                    <p>Current Surat Pernyataan: <a href="{{ Storage::url($candidate->surat_pernyataan) }}" target="_blank">{{ $candidate->surat_pernyataan }}</a></p>
                @endif
            </div>

            <div class="form-group">
                <label for="surat_bebas_narkoba">Surat Bebas Narkoba</label>
                <input type="file" name="surat_bebas_narkoba" class="form-control">
                @if ($candidate->surat_bebas_narkoba)
                    <p>Current Surat Bebas Narkoba: <a href="{{ Storage::url($candidate->surat_bebas_narkoba) }}" target="_blank">{{ $candidate->surat_bebas_narkoba }}</a></p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
