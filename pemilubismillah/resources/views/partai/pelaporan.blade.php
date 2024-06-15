@extends('layoutspartai.dashboardpartai')

@section('content')
<div class="content">
    <div class="navbar">
        <h4>Pelaporan</h4>
        <div class="user-info">
            <span style="font-weight: bold; margin-right: 10px">{{ Auth::user()->username }}</span>
            <img src="{{ asset('images/user.svg') }}" alt="User Image">
        </div>
    </div>

    <div class="form-container mt-4" style="margin-left: -250px; margin-right: auto;">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('pelaporan.store') }}" method="POST" id="report-form">
            @csrf
            <div class="form-group">
                <label for="kegiatan">Kegiatan</label>
                <input type="text" id="kegiatan" name="kegiatan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="metode">Metode</label>
                <input type="text" id="metode" name="metode" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tempat">Tempat</label>
                <input type="text" id="tempat" name="tempat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah_peserta">Jumlah Peserta</label>
                <input type="number" id="jumlah_peserta" name="jumlah_peserta" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-select" name="status" id="status" required>
                    <option selected disabled>Pilih...</option>
                    <option value="Belum Terlaksana">Belum Terlaksana</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <button type="submit" class="submit-btn btn btn-danger mt-3">KIRIM</button>
        </form>
    </div>

    <!-- Modal for alerts -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Gagal mengirim laporan</h5>
                    <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Gagal mengirim laporan! Pastikan semua data terisi dengan benar.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function showAlertModal(message) {
            var alertModal = new bootstrap.Modal(document.getElementById('alertModal'), {
                keyboard: false
            });
            document.querySelector('#alertModal .modal-body').textContent = message;
            alertModal.show();
        }

        document.getElementById('report-form').addEventListener('submit', function (event) {
            var kegiatan = document.getElementById('kegiatan').value;
            var metode = document.getElementById('metode').value;
            var tempat = document.getElementById('tempat').value;
            var tanggal = document.getElementById('tanggal').value;
            var jumlah_peserta = document.getElementById('jumlah_peserta').value;
            var status = document.getElementById('status').value;

            if (!kegiatan || !metode || !tempat || !tanggal || !jumlah_peserta || !status) {
                event.preventDefault();
                showAlertModal('Pastikan semua data terisi!');
            }
        });
    });
</script>
@endsection
