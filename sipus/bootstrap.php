<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siperpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container-fluid vh-100 d-flex flex-column">
        <!-- Header -->
        <div class="row bg-dark text-white p-2">
            <div class="col-1 d-flex align-items-center">
                <img src="./assets/images/book.jpg" alt="Logo" class="img-fluid">
            </div>
            <div class="col-11 d-flex flex-column align-items-center justify-content-center">
                <h1>Perpustakaan Umum</h1>
                <h5>Politeknik Negeri Banyuwangi</h5>
            </div>
        </div>

        <!-- Main Container -->
        <div class="row flex-grow-1">
            <!-- Sidebar -->
            <div class="col-2 bg-dark text-white p-3">

                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active text-white">
                            <i class="bi bi-house me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-speedometer2 me-2"></i>
                            Data Master
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-table me-2"></i>
                            Data Anggota
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-grid me-2"></i>
                            Data Buku
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-people me-2"></i>
                            Data Transaksi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-people me-2"></i>
                            Transaksi Peminjaman
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-people me-2"></i>
                            Transaksi Pengembalian
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-people me-2"></i>
                            Laporan Transaksi
                        </a>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-10 p-3 bg-light">
                <h1>Selamat Datang di Perpustakaan Poliwangi</h1>
                <p>Konten utama di sini...</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>