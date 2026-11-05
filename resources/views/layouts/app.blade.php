<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apotek SENASIB')</title>
    <!-- Bootstrap 5 & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #570b5a; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        #sidebar {
            min-width: 260px;
            max-width: 260px;
            background: #fcf800;
            color: #fff;
            transition: all 0.3s;
            min-height: 100vh;
        }
        #sidebar.active {
            margin-left: -260px;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #146c43;
            font-size: 1.2rem;
            font-weight: bold;
        }
        #sidebar ul.components {
            padding: 20px 0;
        }
        #sidebar ul li a {
            padding: 12px 20px;
            font-size: 1rem;
            display: block;
            color: rgba(6, 10, 112, 0.85);
            text-decoration: none;
            transition: 0.2s;
        }
        #sidebar ul li a:hover, #sidebar ul li.active > a {
            color: #fff;
            background: #157347;
            border-left: 4px solid #ffc107;
        }
        #sidebar ul li a i {
            width: 30px;
        }
        #content {
            width: 100%;
            padding: 20px;
            transition: all 0.3s;
        }
        .hero-img {
            max-height: 220px;
            object-fit: cover;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <div class="d-flex">
        <!-- Sidebar Menu Samping (Bisa Dibuka-Tutup) -->
        <nav id="sidebar" class="shadow">
            <div class="sidebar-header d-flex align-items-center">
                <i class="fa-solid fa-capsules fa-lg me-2 text-warning"></i>
                <span>APOTEK SENASIB</span>
            </div>
            <ul class="list-unstyled components">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="/"><i class="fa-solid fa-house"></i> Dashboard</a>
                </li>
                <li class="{{ request()->is('pelanggan*') ? 'active' : '' }}">
                    <a href="/pelanggan"><i class="fa-solid fa-users"></i> Data Pelanggan</a>
                </li>
                <li class="{{ request()->is('staf-apotek*') ? 'active' : '' }}">
                    <a href="/staf-apotek"><i class="fa-solid fa-user-tie"></i> Data Staf</a>
                </li>
                <li class="{{ request()->is('obat*') ? 'active' : '' }}">
                    <a href="/obat"><i class="fa-solid fa-pills"></i> Data Obat</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <!-- Top Navbar dengan Tombol Toggle Sidebar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded-4 px-4 mb-4">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-success rounded-pill px-3 shadow-sm">
                        <i class="fa-solid fa-bars me-1"></i> Menu Samping
                    </button>
                    <div class="ms-auto d-flex align-items-center">
                        <span class="fw-semibold text-secondary"><i class="fa-solid fa-user-shield me-1"></i> Ada Admin </span>
                    </div>
                </div>
            </nav>

            <!-- Flash Alert -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Konten Utama Dinamis -->
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS & Script Toggle Sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarCollapse').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>