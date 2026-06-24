@extends('admin.layout')

@section('content')

<div class="mb-4">
    <h2>Edit Jadwal Khotib</h2>
    <p class="text-muted">Perbarui informasi jadwal khotib</p>
</div>

<div class="card border-0 shadow-sm" style="max-width: 600px;">
    <div class="card-body p-4">
        <form action="{{ route('admin.update', $jadwal->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-500">Nama Masjid</label>
                <input type="text" name="nama_masjid" class="form-control @error('nama_masjid') is-invalid @enderror" value="{{ $jadwal->nama_masjid }}" required>
                @error('nama_masjid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-500">Tanggal</label>
                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ $jadwal->tanggal }}" required>
                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-500">Nama Khotib</label>
                <input type="text" name="nama_khotib" class="form-control @error('nama_khotib') is-invalid @enderror" value="{{ $jadwal->nama_khotib }}" required>
                @error('nama_khotib')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-500">Foto Khotib</label>
                @if($jadwal->foto)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$jadwal->foto) }}" style="max-width: 150px; max-height: 150px; object-fit: cover;" class="rounded-2">
                    </div>
                @endif
                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*">
                <small class="text-muted d-block mt-2">Format: JPG, PNG. Ukuran maksimal 2MB</small>
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

@endsection