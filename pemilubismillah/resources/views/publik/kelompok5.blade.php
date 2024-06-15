@extends('layouts.pengaduannavbar')

@section('title', 'Daftar Pengaduan')

@section('contents')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-semibold mb-6">Daftar Pengaduan</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($pengaduans as $pengaduan)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                @if($pengaduan->foto)
                    <a href="{{ route('pengaduanrinci', $pengaduan->id) }}">
                        <img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Aduan" class="w-full h-48 object-cover">
                    </a>
                @else
                    <img src="https://via.placeholder.com/150" alt="No Photo" class="w-full h-48 object-cover">
                @endif
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $pengaduan->judul }}</h2>
                    <p class="text-gray-600">{{ $pengaduan->created_at->format('d M Y') }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
