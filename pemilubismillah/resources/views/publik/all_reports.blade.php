@extends('layouts.kampanyenavbar')

@section('title', 'Semua Pelaporan')

@section('contents')
<!-- Main Content -->
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Semua Pelaporan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($reports as $report)
                <div class="border rounded-lg p-4">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $report->kegiatan }}</h2>
                    <p class="text-gray-700 mb-2">Metode: {{ $report->metode }}</p>
                    <p class="text-gray-700 mb-2">Tempat: {{ $report->tempat }}</p>
                    <p class="text-gray-700 mb-2">Tanggal: {{ $report->tanggal }}</p>
                    <p class="text-gray-700 mb-2">Jumlah Peserta: {{ $report->jumlah_peserta }}</p>
                    <p class="text-gray-700 mb-2">Status: {{ $report->status }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
