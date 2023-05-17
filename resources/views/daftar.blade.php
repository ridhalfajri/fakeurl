<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hadir Pegawai</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary mb-3">
        <div class="container-fluid bg-info bg-gradient">
            <a class="navbar-brand" href="#">
                <img src="{{ 'assets/img/bsn1.png' }}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                DAFTAR HADIR
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        @if (session()->has('save'))
            <div class="alert alert-primary" role="alert">
                Data berhasil disimpan!
            </div>
        @endif
        <form action="{{ route('user.save') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="text" name="name" class="form-control" id="name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="email" name="email" class="form-control" id="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="number" name="nik" class="form-control" id="nik">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="number" name="nip" class="form-control" id="nip">
                </div>
            </div>
            <div class="row mb-3">
                <label for="unit_kerja" class="col-sm-2 col-form-label">Unit Kerja</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="text" name="unit_kerja" class="form-control" id="unit_kerja">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_telepon" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="number" name="no_telepon" class="form-control" id="no_telepon">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_pasangan" class="col-sm-2 col-form-label">Nama Pasangan</label>
                <div class="col-sm-10 col-lg-4">
                    <input type="text" name="nama_pasangan" class="form-control" id="nama_pasangan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_pasangan" class="col-sm-2 col-form-label">Status Pasangan</label>
                <div class="col-sm-10 col-lg-2">
                    <input class="form-check-input" type="radio" name="is_pasangan_bekerja" id="bekerja"
                        value="1">
                    <label class="form-check-label" for="bekerja">
                        Bekerja
                    </label>
                </div>
                <div class="col-sm-10 col-lg-2">
                    <input class="form-check-input" type="radio" name="is_pasangan_bekerja" id="tidak_bekerja"
                        value="0">
                    <label class="form-check-label" for="tidak_bekerja2">
                        Tidak Bekerja
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>

</html>
