<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">SILAHKAN ISI PENDAFTARAN</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly placeholder="(Input ID bersifat auto increment)">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="(Input Nama)" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" class="form-control" placeholder="(Input alamat)" rows="2" required>{{ old('alamat') }}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}" placeholder="(Input tempat lahir)" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Hobi</label>
                        <div class="col-sm-9">
                            <input type="text" name="hobi" class="form-control" value="{{ old('hobi') }}" placeholder="(Input hobi)" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" name="foto" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">No Hp</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}" placeholder="(Input no hp)" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Alamat email</label>
                        <div class="col-sm-9">
                            <input type="email" name="alamat_email" class="form-control" value="{{ old('alamat_email') }}" placeholder="(Input alamat email)" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Ayah</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_ayah" class="form-control" value="{{ old('nama_ayah') }}" placeholder="(Input nama orang tua)" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-9">
                            <input type="text" name="asal_sekolah" class="form-control" value="{{ old('asal_sekolah') }}" placeholder="(Input asal Sekolah)" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" name="nik" class="form-control" value="{{ old('nik') }}" placeholder="(Input NO KTP)" maxlength="16" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>