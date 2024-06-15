@extends('layoutspartai.dashboardpartai')

@section('content')
<div class="content">
    <div class="navbar">
        <h4>Daftar Caleg</h4>
        <div class="user-info">
            <span style="font-weight: bold; margin-right: 10px">{{ Auth::user()->username }}</span>
            <img src="{{ asset('images/user.svg') }}" alt="User Image">
        </div>
    </div>
    @php
        $userCalegCount = App\Models\Candidate::where('user_id', Auth::id())->count();
    @endphp
    <div class="form-container" style="margin-left: -250px; margin-right: auto;">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Formulir</th>
                    <th>KTP</th>
                    <th>Ijazah</th>
                    <th>Surat Pernyataan</th>
                    <th>Surat Bebas Narkoba</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidates as $candidate)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $candidate->name }}</td>
                    <td>{{ $candidate->position }}</td>
                    <td>
                        @if ($candidate->formulir)
                            <img src="{{ Storage::url($candidate->formulir) }}" class="document-image" alt="Formulir" onclick="showImageModal(this.src)">
                        @endif
                    </td>
                    <td>
                        @if ($candidate->ktp)
                            <img src="{{ Storage::url($candidate->ktp) }}" class="document-image" alt="KTP" onclick="showImageModal(this.src)">
                        @endif
                    </td>
                    <td>
                        @if ($candidate->ijazah)
                            <img src="{{ Storage::url($candidate->ijazah) }}" class="document-image" alt="Ijazah" onclick="showImageModal(this.src)">
                        @endif
                    </td>
                    <td>
                        @if ($candidate->surat_pernyataan)
                            <img src="{{ Storage::url($candidate->surat_pernyataan) }}" class="document-image" alt="Surat Pernyataan" onclick="showImageModal(this.src)">
                        @endif
                    </td>
                    <td>
                        @if ($candidate->surat_bebas_narkoba)
                            <img src="{{ Storage::url($candidate->surat_bebas_narkoba) }}" class="document-image" alt="Surat Bebas Narkoba" onclick="showImageModal(this.src)">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('partai.edit', $candidate->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('partai.destroy', $candidate->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Document Image</h5>
                    <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Document Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function showImageModal(src) {
    document.getElementById('modalImage').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
}
</script>
@endsection
