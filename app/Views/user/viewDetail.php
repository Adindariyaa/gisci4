<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('hotelier/img/favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('hotelier/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('hotelier/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('hotelier/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('hotelier/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('hotelier/css/style.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>

<body>
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase">Badminton</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="" class="nav-item nav-link active">Home</a>
                            <a href="#lapangan" class="nav-item nav-link">Daftar GOR</a>
                            <a href="#quest" class="nav-item nav-link">Tentang</a>
                            <a href="#kontak" class="nav-item nav-link">Kontak</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container py-5">
        <h2 class="mb-4 text-center">Detail Lokasi</h2>

        <div class="row g-4">
            <!-- KIRI: Detail Lokasi -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-3"><?= esc($lokasi['nama_lokasi']) ?></h4>

                        <?php if (!empty($lokasi['foto_lokasi'])) : ?>
                            <img
                                src="<?= base_url('foto/' . $lokasi['foto_lokasi']) ?>"
                                alt="Foto Lokasi"
                                class="img-fluid rounded mb-3"
                                style="height: 450px; width: 100%; object-fit: cover;">
                        <?php endif; ?>

                        <p><strong>Alamat:</strong> <?= esc($lokasi['alamat_lokasi']) ?></p>
                        <p><strong>Kecamatan:</strong> <?= esc($lokasi['kecamatan']) ?></p>
                        <p><strong>Kontak Pemesanan:</strong> <?= esc($lokasi['kontak_pemesanan']) ?></p>
                        <p><strong>Jumlah Lapangan:</strong> <?= esc($lokasi['jumlah_lapangan']) ?></p>
                        <p><strong>Harga Sewa Weekday:</strong> Rp<?= number_format($lokasi['harga_sewa'], 0, ',', '.') ?></p>
                        <p><strong>Harga Sewa Weekend:</strong> Rp<?= number_format($lokasi['harga_sewa_wk'], 0, ',', '.') ?></p>
                        <p><strong>Jam Operasional:</strong> <?= esc($lokasi['jam_mulai']) ?> - <?= esc($lokasi['jam_selesai']) ?></p>
                        <p><strong>Metode Pemesanan:</strong> <?= esc($lokasi['metode_pemesanan']) ?></p>

                        <p><strong>Fasilitas:</strong></p>
                        <ul>
                            <li>Kantin: <?= esc($lokasi['kantin']) == '1' ? 'Tersedia' : 'Tidak Tersedia' ?></li>
                            <li>Toilet: <?= esc($lokasi['toilet']) == '1' ? 'Tersedia' : 'Tidak Tersedia' ?></li>
                            <li>Parkir: <?= esc($lokasi['parkir']) == '1' ? 'Tersedia' : 'Tidak Tersedia' ?></li>
                        </ul>

                        <p><small class="text-muted">Terdaftar pada: <?= date('d M Y, H:i', strtotime($lokasi['created_at'])) ?></small></p>

                        <a href="<?= base_url('user') ?>#lapangan" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>

            <!-- KANAN: PETA + Tombol -->
            <div class="col-lg-6">
                <div class="shadow-sm rounded overflow-hidden bg-white">
                    <!-- Peta -->
                    <div id="map" style="width: 100%; height: 500px;" class="rounded-top"></div>

                    <!-- Tombol Rute -->
                    <div class="p-3 text-center">
                        <a href="#"
                            onclick="openRoute(<?= $lokasi['latitude'] ?>, <?= $lokasi['longitude'] ?>)"
                            class="btn btn-success w-100">
                            Lihat Rute ke Lokasi
                        </a>


                        <script>
                            function openRoute(destLat, destLng) {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function(position) {
                                        const origin = position.coords.latitude + ',' + position.coords.longitude;
                                        const url = `https://www.google.com/maps/dir/?api=1&origin=${origin}&destination=${destLat},${destLng}`;
                                        window.open(url, '_blank');
                                    }, function(error) {
                                        alert('Gagal mengambil lokasi kamu. Aktifkan izin lokasi browser.');
                                    });
                                } else {
                                    alert('Browser kamu tidak mendukung fitur lokasi.');
                                }
                            }
                        </script>


                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- LEAFLET JS & CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        // Ambil koordinat dari PHP
        const latitude = <?= $lokasi['latitude'] ?>;
        const longitude = <?= $lokasi['longitude'] ?>;

        const map = L.map('map').setView([latitude, longitude], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Tambahkan marker
        L.marker([latitude, longitude]).addTo(map)
            .bindPopup('<?= esc($lokasi['nama_lokasi']) ?>')
            .openPopup();
    </script>






</body>