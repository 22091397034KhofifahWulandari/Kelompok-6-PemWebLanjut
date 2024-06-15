<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div>
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 text-white">
                                <img src="images/logo.png" class="h-8 w-auto" alt="Logo">
                            </div>
                            <div class="flex-shrink-0 text-white ml-2">
                                KOMISI PEMILIHAN UMUM
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ url('/') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                <a href="{{ route('kelompok8') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Rekapitulasi</a>
                                <a href="{{ route('kelompok6') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kampanye</a>
                                <a href="{{ route('kelompok5') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pengaduan</a>
                                <a href="{{ route('publication') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Publication</a>
                                <a href="{{ route('faqs') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">FAQs</a>  
                                <a href="{{ url('/') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                                <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login Pemilu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="container mx-auto py-8">
                    <h1 class="text-3xl font-bold mb-6 text-gray-800">Rekapitulasi Hasil Pemilihan</h1>
                    <div class="row">
                        <!-- Candidate 1 -->
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="images/candidate1.jpeg" alt="Candidate 1" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Prabowo - Gibran</h5>
                                    <p class="card-text">Jumlah Suara: 96,214,691</p>
                                </div>
                            </div>
                        </div>
                        <!-- Candidate 2 -->
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="images/candidate2.jpeg" alt="Candidate 2" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Jokowi - Sandi</h5>
                                    <p class="card-text">Jumlah Suara: 85,672,319</p>
                                </div>
                            </div>
                        </div>
                        <!-- Candidate 3 -->
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="images/candidate3.jpeg" alt="Candidate 3" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Prabowo - Anies</h5>
                                    <p class="card-text">Jumlah Suara: 70,882,499</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Chart -->
                    <div class="row">
                        <div class="col-md-12">
                            <canvas id="chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="bg-black py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <p>&copy; Hak Cipta MIA 2022 @2024.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Prabowo - Gibran', 'Jokowi - Sandi', 'Prabowo - Anies'],
                datasets: [{
                    label: 'Jumlah Suara',
                    data: [96214691, 85672319, 70882499],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
