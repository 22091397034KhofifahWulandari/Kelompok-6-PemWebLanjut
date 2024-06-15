@extends('layouts.kelompok8navbar')

@section('title', 'Rekapitulasi Hasil Pemilihan')

@section('contents')
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
@endsection

@section('scripts')
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
@endsection
