<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow border-0 rounded-4">
            <div class="card-header bg-warning text-dark py-3">
                <h4 class="m-0 fw-bold">Edit Data Pelanggan</h4>
            </div>
            <div class="card-body p-4">
                <form action="/pelanggan/{{ $pelanggan->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-bold">ID Pelanggan</label>
                        <input type="text" name="id_pelanggan" class="form-control" value="{{ $pelanggan->id_pelanggan }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" required>{{ $pelanggan->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">No HP</label>
                        <input type="text" name="no_hp" class="form-control" value="{{ $pelanggan->no_hp }}" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/pelanggan" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-warning px-4 text-white">Perbarui Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>