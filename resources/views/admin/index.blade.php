@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Jadwal Khotib Jumat</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-primary">+ Tambah Jadwal</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>No</th>
                        <th>Masjid</th>
                        <th>Tanggal</th>
                        <th>Khotib</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jadwals as $j)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $j->nama_masjid }}</td>
                        <td>{{ \Carbon\Carbon::parse($j->tanggal)->translatedFormat('d F Y') }}</td>
                        <td>{{ $j->nama_khotib }}</td>
                        <td>
                            @if($j->foto)
                                <img src="{{ asset('storage/'.$j->foto) }}" width="50" class="rounded-2" style="object-fit:cover; height:50px;">
                            @else
                                <span class="badge bg-secondary">Tidak ada</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.edit', $j->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.destroy', $j->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            <p class="text-muted mb-0">Belum ada data jadwal</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection



</div>



@endsection