<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Tambah Obat</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow border-0 rounded-4">
            <div class="card-header bg-primary text-white py-3"><h4 class="m-0 fw-bold">Tambah Data Obat</h4></div>
            <div class="card-body p-4">
                <form action="/obat" method="POST">
                    @csrf
                    <div class="mb-3"><label class="form-label fw-bold">Kode Obat</label><input type="text" name="kode_obat" class="form-control" required></div>
                    <div class="mb-3"><label class="form-label fw-bold">Nama Obat</label><input type="text" name="nama_obat" class="form-control" required></div>
                    <div class="mb-3"><label class="form-label fw-bold">Stock Obat</label><input type="number" name="stock_obat" class="form-control" required></div>
                    <div class="mb-3"><label class="form-label fw-bold">Tanggal Kadaluarsa</label><input type="date" name="tanggal_kadaluarsa" class="form-control" required></div>
                    <div class="d-flex justify-content-between"><a href="/obat" class="btn btn-secondary">Kembali</a><button type="submit" class="btn btn-success px-4">Simpan</button></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>