<!doctype html>
<html lang="en">

<head>
    <title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="frontend/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Sistem Informasi Pengunjung Museum Lampung</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(frontend/images/bg-1.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Pengunjung Museum Lampung</h3>
                                </div>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ url('simpan-data') }}" method="post" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control"
                                        placeholder="Isi Nama Anda" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="tlp">Telepon</label>
                                    <input type="text" name="telepon" class="form-control"
                                        placeholder="Isi Nomor Telepon Anda" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="Isi Email Anda" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="alamat">Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Isi Alamat Anda" cols="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/popper.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/main.js"></script>

</body>

</html>
