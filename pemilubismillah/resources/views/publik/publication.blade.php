@extends('layouts.publicationnavbar')

@section('title', 'Publication')

@section('contents')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Publications</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Publication 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
            <img src="images/publication1.jpg" alt="Publication 1" class="w-full h-48 object-cover">
            <div class="p-6 flex-grow">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">Kecurangan Pemilu 2024!?</h2>
                <p class="text-gray-700">Banyak isu terkait kecurangan pemilu yang cukup signifikan. Hal tersebut menimbulkan beberapa kekhawatiran di kalangan masyarakat dan pengamat politik.</p>
            </div>
            <div class="p-6 pt-0">
                <a href="https://antikorupsi.org/id/kecurangan-pemilu-2024-temuan-pemantauan-dan-potensi-kecurangan-hari-tenang-pemungutan-penghitungan" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded-md">Read More</a>
            </div>
        </div>
        <!-- Publication 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
            <img src="images/publication2.jpeg" alt="Publication 2" class="w-full h-48 object-cover">
            <div class="p-6 flex-grow">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">Paslon Nomor Urut 02 Unggul Sementara</h2>
                <p class="text-gray-700">Di beberapa daerah, paslon nomor urut 02 unggul dibanding paslon-paslon lainnya. Sedangkan paslon 01 dan 03 masih jauh tertinggal.</p>
            </div>
            <div class="p-6 pt-0">
                <a href="https://www.tvonenews.com/channel/news/168183-disebut-paslon-02-bisa-menang-1-putaran-apa-alasannya" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded-md">Read More</a>
            </div>
        </div>
        <!-- Publication 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
            <img src="images/publication3.jpg" alt="Publication 3" class="w-full h-48 object-cover">
            <div class="p-6 flex-grow">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">KPU Sahkan Suara Komeng, Peserta Rekapitulasi Nasional Langsung Teriak 'Uhuy'</h2>
                <p class="text-gray-700">Jakarta - Komisi Pemilihan Umum (KPU) RI mengesahkan perolehan suara pemilihan calon anggota DPD daerah pemilihan Jawa Barat. Komedian Alfiansyah Komeng mendapatkan suara tertinggi sebanyak 5,3 juta.</p>
            </div>
            <div class="p-6 pt-0">
                <a href="https://news.detik.com/pemilu/d-7250946/kpu-sahkan-suara-komeng-peserta-rekapitulasi-nasional-langsung-teriak-uhuy" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded-md">Read More</a>
            </div>
        </div>
        <!-- Publication 4 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
            <img src="images/publication4.jpg" alt="Publication 4" class="w-full h-48 object-cover">
            <div class="p-6 flex-grow">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">KPU Tetapkan Hasil Pemilu Tahun 2024</h2>
                <p class="text-gray-700">Rapat pleno terbuka dipimpin oleh Ketua KPU Hasyim Asy'ari, Idham Holik, Mochammad Afifudin, dll mendapatkan hasil jika pasangan Prabowo-Gibran unggul dengan 96.214.691 suara.</p>
            </div>
            <div class="p-6 pt-0">
                <a href="https://desatepus.gunungkidulkab.go.id/first/artikel/3799-Keputusan-KPU-RI---Penetapan-Hasil-Pemilu-Tahun-2024-Tingkat-Nasional-" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded-md">Read More</a>
            </div>
        </div>
        <!-- Publication 5 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
            <img src="images/publication5.jpeg" alt="Publication 5" class="w-full h-48 object-cover">
            <div class="p-6 flex-grow">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">Bawaslu Temukan 19 Masalah dalam Penghitungan Suara</h2>
                <p class="text-gray-700">Berdasarkan hasil patroli pengawasan di 38 provinsi menemukan 13 permasalahan yang ada dalam perhitungan suara pemilu.</p>
            </div>
            <div class="p-6 pt-0">
                <a href="https://www.bawaslu.go.id/id/berita/bawaslu-temukan-19-masalah-dalam-pemungutan-dan-penghitungan-suara-di-pemilu-2024" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded-md">Read More</a>
            </div>
        </div>
        <!-- Publication 6 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
            <img src="images/publication6.jpeg" alt="Publication 6" class="w-full h-48 object-cover">
            <div class="p-6 flex-grow">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">KPU RI Siap Hadapi Sengketa Hasil Pemilu 2024</h2>
                <p class="text-gray-700">Mellaz menjelaskan KPU RI akan menyelesaikan beberapa pemilihan anggota legislatif terlebih dahulu. Penetapan Hasil Pemilu 2024 akan ditetapkan dalam SK.</p>
            </div>
            <div class="p-6 pt-0">
                <a href="https://www.antaranews.com/berita/4019355/kpu-ri-sebut-pengumuman-hasil-pemilu-2024-disampaikan-usai-buka-puasa" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded-md">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection
