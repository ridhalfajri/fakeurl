<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary mb-3">
        <div class="container-fluid bg-info bg-gradient">
            <a class="navbar-brand" href="#">
                <img src="{{ 'assets/img/bsn1.png' }}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                INPUT DATA PEGAWAI
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        <form>
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
            {{-- <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            First radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                            value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Second radio
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                            value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                            Third disabled radio
                        </label>
                    </div>
                </div>
            </fieldset> --}}
            {{-- <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label>
                    </div>
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>

</html>
