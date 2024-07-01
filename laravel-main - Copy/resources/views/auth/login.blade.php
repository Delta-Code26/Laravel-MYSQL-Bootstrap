<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="dist/img/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Masuk - Sime Darby (Bukit Rona)</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 d-none d-md-block bg-primary vh-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="w-75" src="{{ asset('assets/img/logo_kampus.png') }}" alt="Logo">
                </div>
            </div>
            <div class="col-md-8 vh-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="p-5 col-md-6">
                        <h3 class="fw-bold mb-4 text-center">LOGIN</h3>
                        <p class="text-center">Silahkan Login Dahulu | <a href='https://simedarby.com/' title='Bukit Rona' target='_blank'>Sime Darby</a></p>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="*******" required>
                            </div>
                            <div class="d-grid mb-4">
                                <button class="btn btn-primary" name="btnLogin" type="submit">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
