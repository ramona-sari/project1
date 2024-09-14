<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Register</title>
</head>
<body>
    <div class="container mt-4">
        <a href="/">
            <i class="bi-arrow-left h1"></i>
        </a>
    </div>

    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px;">
        <div class="card" style="width: 35%;">
            <div class="card-body p-4">
                <h3 class="card-title text-center">Register</h3>
                <form>
                    @csrf
                    <div class="form-group mt-4">
                        <label class="text-secondary">Nama Anda</label>
                        <input type="text" class="form-control border border-secondary form-control-lg" name="name">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-secondary">Email Anda</label>
                        <input type="email" class="form-control border border-secondary form-control-lg" name="email">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-secondary">Pilih Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki">
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-secondary">Password Anda</label>
                        <input type="password" class="form-control border border-secondary form-control-lg" name="password">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-secondary">Konfirmasi Password Anda</label>
                        <input type="password" class="form-control border border-secondary form-control-lg" name="password_confirmation" required>
                    </div>

                    <button type="submit" class="form-control btn btn-primary mt-5">Register</button>
                </form>
                <p class="mt-2 text-center">Sudah punya akun? <a href="#" style="text-decoration: none;">Ayo masuk!</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>