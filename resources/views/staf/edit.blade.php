<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Edit Staf</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow border-0 rounded-4">
            <div class="card-header bg-warning text-dark py-3"><h4 class="m-0 fw-bold">Edit Staf Apotek</h4></div>
            <div class="card-body p-4">
                <form action="/staf-apotek/{{ $staf->id }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3"><label class="form-label fw-bold">ID Staff</label><input type="text" name="id_staff" class="form-control" value="{{ $staf->id_staff ?? $staf->id_staf }}" required></div>
                    <div class="mb-3"><label class="form-label fw-bold">Nama Lengkap</label><input type="text" name="nama" class="form-control" value="{{ $staf->nama }}" required></div>
                    <div class="mb-3"><label class="form-label fw-bold">Alamat</label><textarea name="alamat" class="form-control" rows="2" required>{{ $staf->alamat }}</textarea></div>
                    <div class="mb-3"><label class="form-label fw-bold">No HP</label><input type="text" name="no_hp" class="form-control" value="{{ $staf->no_hp }}" required></div>
                    <div class="d-flex justify-content-between"><a href="/staf-apotek" class="btn btn-secondary">Kembali</a><button type="submit" class="btn btn-warning px-4 text-white">Perbarui</button></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>