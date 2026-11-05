<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Apotek</title>
    <!-- Bootstrap 5 & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <!-- Navbar Modern -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><i class="fa-solid fa-capsules me-2"></i>Apotek Senasib</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active fw-bold text-warning" href="/">Dashboard</a>
                <a class="nav-link" href="/pelanggan">Data Pelanggan</a>
                <a class="nav-link" href="/staf-apotek">Data Staf</a>
                <a class="nav-link" href="/obat">Data Obat</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="p-5 mb-4 bg-white rounded-4 shadow-sm border">
            <div class="container-fluid py-2">
                <h1 class="display-5 fw-bold text-success"><i class="fa-solid fa-house-medical me-2"></i>Selamat Datang di Apotek SENASIB</h1>
                <p class="col-md-8 fs-4 text-muted">Kami siap membirimu "OBAT" di saat orang lain memberimu "LUKA" karena tugas kami "MENGOBATI" bukan "MENYAKITI". 
                    Silahkan cekk data kamu.</p>
            </div>
        </div>

        <!-- Kartu Statistik -->
        <div class="row">
            <!-- Card Pelanggan -->
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm rounded-4 text-white bg-primary">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase fw-bold mb-1">Total Pelanggan</h6>
                                <h2 class="display-6 fw-bold mb-0">{{ $total_pelanggan }}</h2>
                            </div>
                            <i class="fa-solid fa-users fa-2x opacity-50"></i>
                        </div>
                        <div class="mt-3">
                            <a href="/pelanggan" class="text-white text-decoration-none small fw-bold">Kelola Pelanggan <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Staf Apotek -->
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm rounded-4 text-white bg-warning">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase fw-bold mb-1">Total Staf Apotek</h6>
                                <h2 class="display-6 fw-bold mb-0">{{ $total_staf }}</h2>
                            </div>
                            <i class="fa-solid fa-user-tie fa-2x opacity-50"></i>
                        </div>
                        <div class="mt-3">
                            <a href="/staf-apotek" class="text-white text-decoration-none small fw-bold">Kelola Staf <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Obat -->
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm rounded-4 text-white bg-danger">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase fw-bold mb-1">Total Obat</h6>
                                <h2 class="display-6 fw-bold mb-0">{{ $total_obat }}</h2>
                            </div>
                            <i class="fa-solid fa-pills fa-2x opacity-50"></i>
                        </div>
                        <div class="mt-3">
                            <a href="/obat" class="text-white text-decoration-none small fw-bold">Kelola Obat <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>