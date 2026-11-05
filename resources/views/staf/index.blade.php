@extends('layouts.app')

@section('content')
<div class="card shadow border-0 rounded-4">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h4 class="m-0 fw-bold text-primary"><i class="fa-solid fa-user-tie me-2"></i>Daftar Staf Apotek</h4>
        <a href="/staf-apotek/create" class="btn btn-primary rounded-pill px-4 shadow-sm">
            <i class="fa-solid fa-plus me-2"></i>Tambah Staf
        </a>
    </div>
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th>ID Staff</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($staf as $key => $item)
                        <tr>
                            <td class="text-center fw-bold">{{ $key + 1 }}</td>
                            <td><span class="badge bg-secondary">{{ $item->id_staff ?? $item->id_staf ?? '-' }}</span></td>
                            <td class="fw-semibold">{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td class="text-center">
                                <a href="/staf-apotek/{{ $item->id }}/edit" class="btn btn-warning btn-sm text-white shadow-sm me-1" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="/staf-apotek/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm shadow-sm" title="Hapus">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                <i class="fa-solid fa-folder-open fa-2x mb-2"></i>
                                <p>Belum ada data staf tersedia.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection