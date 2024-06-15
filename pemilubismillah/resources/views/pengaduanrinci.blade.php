@extends('layouts.pengaduannavbar')

@section('title', 'Detail Pengaduan')

@section('contents')
<div class="container mx-auto py-6">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        @if($pengaduan->foto)
            <img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Aduan" class="w-1/4 mx-auto h-auto">
        @else
            <img src="https://via.placeholder.com/150" alt="No Photo" class="w-1/4 mx-auto h-auto">
        @endif

        <div class="p-6">
            <h1 class="text-3xl font-semibold mb-4">{{ $pengaduan->judul }}</h1>
            <p class="text-gray-600 mb-4">{{ $pengaduan->isi_laporan }}</p>
            <p class="text-gray-600 mb-4"><strong>Tanggal Pengaduan:</strong> {{ $pengaduan->tanggal_pengaduan }}</p>
            <p class="text-gray-600 mb-4"><strong>Status:</strong> {{ $pengaduan->status }}</p>
            @if($pengaduan->response)
                <p class="text-gray-600"><strong>Respon:</strong> {{ $pengaduan->response }}</p>
            @endif
        </div>
    </div>

    <!-- Back Button -->
    <div class="mt-4">
        <a href="{{ route('kelompok5') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
</div>
@endsection
