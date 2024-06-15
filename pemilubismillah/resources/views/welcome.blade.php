@extends('layouts.welcomenavbar')

@section('title', 'Home')

@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Welcome to Our Homepage
        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="bg-red-500 p-6 rounded-lg">
                <div class="flex items-center justify-center space-x-4">
                    <img src="images/home1.jpg" alt="Placeholder Image" class="rounded-lg shadow-lg w-1/2">
                    <img src="images/home2.jpg" alt="Placeholder Image" class="rounded-lg shadow-lg w-1/2">
                </div>
            </div>
            <div class="mt-6 text-center">
                <h2 class="text-2xl font-semibold text-gray-800">About Us</h2>
                <p class="mt-4 text-gray-600">
                    Selamat datang di beranda kami! Kami senang Anda ada di sini. Situs web kami menawarkan berbagai fitur dan layanan yang dirancang untuk memenuhi kebutuhan Anda. Baik Anda mencari pembaruan terkini, informasi mendetail, atau sekadar menjelajah, kami memiliki sesuatu untuk semua orang. Jangan ragu untuk menelusuri dan menemukan lebih banyak tentang apa yang kami tawarkan.
                </p>
            </div>
            <div class="mt-10 text-center">
                <h2 class="text-2xl font-semibold text-gray-800">Our Services</h2>
                <p class="mt-4 text-gray-600">
                    Kami menyediakan berbagai layanan yang bertujuan untuk membuat hidup Anda lebih mudah dan menyenangkan. Dari dukungan pelanggan terbaik hingga antarmuka yang ramah pengguna, tujuan kami adalah memberikan pengalaman yang luar biasa. Pelajari lebih lanjut tentang layanan kami dan bagaimana kami dapat membantu Anda mencapai tujuan Anda.
                </p>
            </div>
        </div>
    </div>
</main>

@endsection
