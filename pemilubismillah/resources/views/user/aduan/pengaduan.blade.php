@extends('layoutsuser.pengaduannavbar')

@section('title', 'Semua Aduan')

@section('contents')
<!-- Main Content -->
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Form for creating complaint -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Buat Aduan Baru</h2>
                <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="judul" id="judul" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="isi_laporan" class="block text-sm font-medium text-gray-700">Isi Laporan</label>
                        <textarea name="isi_laporan" id="isi_laporan" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                        <input type="file" name="foto" id="foto" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="tanggal_pengaduan" class="block text-sm font-medium text-gray-700">Tanggal Pengaduan</label>
                        <input type="date" name="tanggal_pengaduan" id="tanggal_pengaduan" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Submit</button>
                    </div>
                </form>
            </div>

            <!-- List of complaints -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Daftar Aduan</h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Isi Laporan</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Pengaduan</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($pengaduans as $pengaduan)
                        <tr>
                            <td class="px-6 py-4 whitespace-normal break-words">{{ $pengaduan->judul }}</td>
                            <td class="px-6 py-4 whitespace-normal break-words">{{ $pengaduan->isi_laporan }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($pengaduan->foto)
                                    <img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Aduan" class="h-10 w-10">
                                @else
                                    No Photo
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->tanggal_pengaduan }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
