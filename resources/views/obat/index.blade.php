@extends('layouts.app')

@section('content')
<div class="card shadow border-0 rounded-4">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h4 class="m-0 fw-bold text-primary"><i class="fa-solid fa-pills me-2"></i>Daftar Obat Apotek</h4>
        <a href="/obat/create" class="btn btn-primary rounded-pill px-4 shadow-sm">
            <i class="fa-solid fa-plus me-2"></i>Tambah Obat
        </a>
    </div>
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Stok</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($obat as $key => $item)
                        <tr>
                            <td class="text-center fw-bold">{{ $key + 1 }}</td>
                            <td><span class="badge bg-secondary">{{ $item->kode_obat }}</span></td>
                            <td class="fw-semibold">{{ $item->nama_obat }}</td>
                            <td><span class="badge bg-info text-dark">{{ $item->stock_obat }}</span></td>
                            <td>{{ $item->tanggal_kadaluarsa }}</td>
                            <td class="text-center">
                                <a href="/obat/{{ $item->id }}/edit" class="btn btn-warning btn-sm text-white shadow-sm me-1" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="/obat/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                                <p>Belum ada data obat tersedia.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection