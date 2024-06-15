@extends('layouts.faqsnavbar')
 
@section('title', 'Home')
 
@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            FAQs
        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="grid grid-cols-1 gap-4">
                <div class="bg-white shadow-md rounded-lg p-6 cursor-pointer" onclick="toggleAnswer('answer1')">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800"> Apa tema Pemilu tahun 2024?</h2>
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div id="answer1" class="mt-4 hidden">
                        <p class="text-gray-600">“Peran Pemuda dalam Memperkokoh Persatuan dan Kesatuan Bangsa untuk Mensukseskan Pemilu Tahun 2024”.</p>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 cursor-pointer" onclick="toggleAnswer('answer2')">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Tanggal bearapa pemilu diadakan?</h2>
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div id="answer2" class="mt-4 hidden">
                        <p class="text-gray-600">DPR, Pemerintah dan Penyelenggara Sepakati Pemilu Serentak 14 Februari 2024</p>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 cursor-pointer" onclick="toggleAnswer('answer3')">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Dimana pemilu diadakan?</h2>
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div id="answer3" class="mt-4 hidden">
                        <p class="text-gray-600">Di daerah masing-masing yang terdekat</p>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak kotak pertanyaan jika diperlukan -->
            </div>
        </div>
    </div>
</main>

<script>
function toggleAnswer(id) {
    const answer = document.getElementById(id);
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
    } else {
        answer.classList.add('hidden');
    }
}
</script>
@endsection
