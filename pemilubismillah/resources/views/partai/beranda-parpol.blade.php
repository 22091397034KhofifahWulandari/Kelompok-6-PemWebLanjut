@extends('layoutspartai.dashboardpartai')

@section('content')
<div class="content">
    <div class="navbar d-flex justify-content-between align-items-center">
        <h4>Upload Berkas</h4>
        <div class="user-info d-flex align-items-center">
            <span style="font-weight: bold; margin-right: 10px">{{ Auth::user()->username }}</span>
            <img src="{{ asset('images/user.svg') }}" alt="User Image">
        </div>
    </div>

    <div class="form-container mt-4" style="max-width: 600px; margin-left: -250px; margin-right: auto;">
        <form action="{{ url('/candidates') }}" method="POST" enctype="multipart/form-data" id="upload-form">
            @csrf
            <div class="form-group">
                <label for="username">Nama Calon Legislatif</label>
                <input type="text" id="username" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="posisi">Posisi Jabatan</label>
                <select class="form-select" name="position" id="posisi">
                    <option selected>Pilih...</option>
                    <option value="DPR">DPR</option>
                    <option value="DPD">DPD</option>
                    <option value="DPRD I">DPRD I</option>
                    <option value="DPRD II">DPRD II</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formulir">Formulir Pendaftaran</label>
                <input type="file" class="form-control" id="formulir" name="formulir">
            </div>
            <div class="form-group">
                <label for="ktp">KTP</label>
                <input type="file" class="form-control" id="ktp" name="ktp">
            </div>
            <div class="form-group">
                <label for="ijazah">Ijazah</label>
                <input type="file" class="form-control" id="ijazah" name="ijazah">
            </div>
            <div class="form-group">
                <label for="surat-pernyataan">Surat Pernyataan</label>
                <input type="file" class="form-control" id="surat-pernyataan" name="surat_pernyataan">
            </div>
            <div class="form-group">
                <label for="surat-bebas-narkoba">Surat Bebas Narkoba</label>
                <input type="file" class="form-control" id="surat-bebas-narkoba" name="surat_bebas_narkoba">
            </div>
            <button type="submit" class="submit-btn btn btn-danger mt-3">KIRIM</button>
        </form>
    </div>

    <!-- Modal for alerts -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Gagal mengunggah berkas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Gagal mengunggah berkas! Setiap partai hanya bisa mengusung maksimal 5 calon legislatif.
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
        var userCalegCount = {{ $userCalegCount }};
        
        function showAlertModal(message) {
            var alertModal = new bootstrap.Modal(document.getElementById('alertModal'), {
                keyboard: false
            });
            document.querySelector('#alertModal .modal-body').textContent = message;
            alertModal.show();
        }

        document.getElementById('upload-form').addEventListener('submit', function (event) {
            var name = document.getElementById('username').value;
            var position = document.getElementById('posisi').value;
            var formulir = document.getElementById('formulir').value;
            var ktp = document.getElementById('ktp').value;
            var ijazah = document.getElementById('ijazah').value;
            var suratPernyataan = document.getElementById('surat-pernyataan').value;
            var suratBebasNarkoba = document.getElementById('surat-bebas-narkoba').value;

            if (!name || !position || !formulir || !ktp || !ijazah || !suratPernyataan || !suratBebasNarkoba) {
                event.preventDefault();
                showAlertModal('Pastikan semua data terisi!');
            } else if (userCalegCount >= 5) {
                event.preventDefault();
                showAlertModal('Setiap partai hanya bisa mengusung maksimal 5 calon legislatif');
            }
        });
    });
</script>
@endsection
