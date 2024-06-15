@extends('layouts.pengaduannavbar')

@section('title', 'Detail Pengaduan')

@section('contents')
<div class="container mx-auto py-6">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        @if($pengaduan->foto)
            <img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Aduan" class="w-full h-64 object-cover">
        @else
            <img src="https://via.placeholder.com/150" alt="No Photo" class="w-full h-64 object-cover">
        @endif
        <div class="p-6">
            <h1 class="text-3xl font-semibold mb-4">{{ $pengaduan->judul }}</h1>
            <p class="text-gray-600 mb-4 p-2" >{{ $pengaduan->isi_laporan }}</p>
            <p class="text-gray-600 mb-4 p-2"><strong>Tanggal Pengaduan:</strong> {{ $pengaduan->tanggal_pengaduan->format('d M Y') }}</p>
            <p class="text-gray-600 mb-4 p-2"><strong>Status:</strong> {{ $pengaduan->status }}</p>
            @if($pengaduan->response)
                <p class="text-gray-600"><strong>Respon:</strong> {{ $pengaduan->response }}</p>
            @endif
        </div>
    </div>
</div>
@endsection
