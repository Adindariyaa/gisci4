<!DOCTYPE html>
<html lang="en">

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
    <?php if (isset($page)) {
        echo view($page);
    } ?>


    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
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
                                <a href="#home" class="nav-item nav-link active">Home</a>
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


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="<?= base_url('gambar/bg_daftarLapangan.jpg') ?>" alt="Image" style="width: 100%; height: auto; max-height: 560px; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Badminton Banda Aceh & Sekitarnya</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Temukan GOR Terbaik Anda</h1>
                                <a href="#lapangan" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat Lapangan</a>
                                <a href="#kontak" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Hubungi GOR</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="<?= base_url('gambar/badminton.jpg') ?>" alt="Image" style="width: 100%; height: auto; max-height: 560px; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Badminton Banda Aceh & Sekitarnya</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Temukan GOR Terbaik Anda</h1>
                                <a href="#lapangan" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat Lapangan</a>
                                <a href="#kontak" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Hubungi GOR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <div class="bg-white p-4 rounded-xl shadow mb-6">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Lokasi Kami</h6>
                <h1 class="mb-5">Peta Lokasi <span class="text-primary text-uppercase">GOR</span></h1>
            </div>

            <!-- Filter Kecamatan -->
            <div class="d-flex justify-content-center">
                <div style="width: 70%;">
                    <div class="mb-4">
                        <label for="filterKecamatan" class="form-label fw-semibold text-success">
                            <i class="bi bi-geo-alt-fill me-1"></i> Filter Kecamatan
                        </label>

                        <div class="input-group shadow-sm rounded">
                            <span class="input-group-text bg-success text-white">
                                <i class="bi bi-funnel-fill"></i>
                            </span>
                            <select id="filterKecamatan" class="form-select border-success" onchange="filterKecamatan()">
                                <option value="">-- Semua Kecamatan --</option>
                                <?php
                                $kecamatanList = [];
                                foreach ($lokasi as $value) {
                                    $kecamatanList[] = $value['kecamatan'];
                                }
                                $kecamatanList = array_unique($kecamatanList);
                                sort($kecamatanList);
                                foreach ($kecamatanList as $kec) {
                                    echo '<option value="' . $kec . '">' . $kec . '</option>';
                                }
                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div id="map" class="rounded-3 shadow" style="height: 80vh; width: 100%;">
                        </div>
                    </div>

                </div>
            </div>

            <script>
                const map = L.map('map').setView([5.5535711, 95.3147047], 13);

                const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                // Pemetaan Lokasi

                const allMarkers = [];

                <?php foreach ($lokasi as $key => $value): ?>
                    const marker<?= $key ?> = L.marker([<?= $value['latitude'] ?>, <?= $value['longitude'] ?>])
                        .bindPopup(`
                         <img src="<?= base_url('foto/' . $value['foto_lokasi']) ?>" width="250"><br>
                        <b><?= $value['nama_lokasi'] ?></b><br>
                        Alamat: <?= $value['alamat_lokasi'] ?>
                `);

                    // Tambahkan properti kecamatan agar bisa difilter
                    marker<?= $key ?>.kecamatan = "<?= $value['kecamatan'] ?>";

                    marker<?= $key ?>.addTo(map); // Tampilkan ke peta
                    allMarkers.push(marker<?= $key ?>); // Simpan ke array global
                <?php endforeach; ?>

                function filterKecamatan() {
                    const selected = document.getElementById("filterKecamatan").value;

                    allMarkers.forEach(marker => {
                        if (selected === "" || marker.kecamatan === selected) {
                            marker.addTo(map);
                        } else {
                            map.removeLayer(marker);
                        }
                    });
                }
            </script>



            <!-- Room Start -->
            <style>
                .pagination {
                    display: flex;
                    list-style: none;
                    gap: 0.5rem;
                }

                .pagination li a,
                .pagination li span {
                    padding: 6px 12px;
                    background: #f0f0f0;
                    border-radius: 4px;
                    color: #333;
                    text-decoration: none;
                }

                .pagination li.active span {
                    background-color: #51B8A7;
                    color: #fff;
                }
            </style>
            <div class="container-xxl py-5">
                <div id="lapangan" class="container-xxl py-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="section-title mb-5">Daftar GOR <span class="text-primary ">Badminton</span>
                        </h1>
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8">
                                <form action="<?= base_url('search') ?>" method="get" class="d-flex">
                                    <input type="text" name="keyword" class="form-control me-2" placeholder="Cari lapangan...">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="row g-4">
                        <?php foreach ($daftar as $item): ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img src="<?= base_url('foto/' . trim($item['foto_lokasi'])) ?>" class="img-fluid w-100 object-fit-cover rounded" style="height: 300px;" alt="<?= $item['nama_lokasi'] ?>">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp. <?= number_format($item['harga_sewa']) ?>/Jam</small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"><?= esc($item['nama_lokasi']) ?></h5>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <?php if (!empty($item['jumlah_lapangan']) && $item['jumlah_lapangan'] > 0): ?>
                                                <small class="border-end me-2 pe-2">
                                                    <i class="fa fa-car text-primary me-2"></i><?= $item['jumlah_lapangan'] ?> Lapangan
                                                </small>
                                            <?php endif; ?>
                                            <?php if (!empty($item['parkir']) && $item['parkir'] > 0): ?>
                                                <small class="border-end me-2 pe-2">
                                                    <i class="fa fa-car text-primary me-2"></i><?= $item['parkir'] ?> Parkir
                                                </small>
                                            <?php endif; ?>

                                            <?php if (!empty($item['kantin']) && $item['kantin'] > 0): ?>
                                                <small class="border-end me-2 pe-2">
                                                    <i class="fa fa-utensils text-primary me-2"></i><?= $item['kantin'] ?> Kantin
                                                </small>
                                            <?php endif; ?>

                                            <?php if (!empty($item['toilet']) && $item['toilet'] > 0): ?>
                                                <small>
                                                    <i class="fa fa-toilet text-primary me-2"></i><?= $item['toilet'] ?> Toilet
                                                </small>
                                            <?php endif; ?>
                                        </div>
                                        <p class="card-text mb-2"><i class="fas fa-map-marker-alt me-2 text-secondary"></i><?= $item['alamat_lokasi'] ?></p>
                                        <!-- <p class="text-body mb-3">Deskripsi singkat lokasi bisa diletakkan di sini.</p> -->
                                        <p class="card-text mb-0"><i class="fas fa-phone me-2 text-secondary mb-2"></i><?= $item['kontak_pemesanan'] ?></p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="<?= base_url('User/viewDetail/' . $item['id_lokasi']) ?>">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        <?= $pager->links() ?>
                    </div>
                </div>
            </div>
            <!-- Room End -->

            <style>
                .section {
                    padding: 40px 0;
                }

                .section img {
                    border-radius: 8px;
                    width: 100%;
                    max-height: 250px;
                    object-fit: cover;
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
                    transition: transform 0.3s ease;
                }

                .section img:hover {
                    transform: scale(1.02);
                }

                .text-box {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
                    font-size: 0.95rem;
                }

                .text-box h3 {
                    font-size: 1.25rem;
                    color: #007f6b;
                    margin-bottom: 0.75rem;
                }

                .text-box p {
                    margin-bottom: 0;
                    line-height: 1.5;
                    font-size: 0.95rem;
                    text-align: justify;
                }

                @media (max-width: 768px) {
                    .text-box {
                        font-size: 0.9rem;
                    }

                    .text-box h3 {
                        font-size: 1.1rem;
                    }
                }
            </style>

            <!-- Mulai Konten -->

            <!-- Bagian Awal Mula Permainan -->
            <div id="quest" class="container-xxl py-1">
                <div class="container text-center">
                    <h1 class="mb-4">SEJARAH <span class="text-primary text-uppercase">Badminton</span></h1>
                    <p class="text-muted">Perjalanan bulu tangkis dari masa ke masa secara visual dan informatif.</p>
                </div>
            </div>

            <div class="container section">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?= base_url('gambar/sejarah_badminton_india.jpg') ?>" alt="Asal usul badminton">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-box">
                            <h3>2000 SM – Awal Mula Permainan</h3>
                            <p>Sejarah bulu tangkis di dunia diperkirakan dimulai dari Mesir sekitar 2000 tahun yang lalu. Namun, beberapa sumber lain menyebut bahwa permainan serupa juga berkembang di Tiongkok dan India. Di Tiongkok, permainan bernama Jianzi dipercaya menjadi cikal bakal bulu tangkis. Jianzi menggunakan kok, tetapi cara memainkannya berbeda dengan bulu tangkis modern karena kok tidak dipukul menggunakan raket, melainkan dijaga agar tidak jatuh ke tanah dengan kaki. Meskipun asal-usulnya tersebar di berbagai wilayah, sejarah mencatat bahwa bentuk modern dari permainan ini berkembang di Inggris.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container section">
                <div class="row align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?= base_url('gambar/battledore.png') ?>" alt="Battledore">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-box">
                            <h3>1850-an – Battledore and Shuttlecock</h3>
                            <p>Tepatnya pada tahun 1850-an, permainan anak-anak di Inggris bernama Battledores and Shuttlecocks mulai populer di inggris, di mana kok dipukul menggunakan tongkat tanpa jaring. Karena pengaruh kolonial, permainan ini menyebar ke India dan dimainkan lebih kompetitif oleh tentara Inggris dengan menambahkan jaring. Nama “badminton” kemudian lahir karena permainan ini dimainkan di Badminton House, Inggris, sekitar tahun 1860.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container section">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?= base_url('gambar/pbsi.jpeg') ?>" alt="PBSI Indonesia">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-box">
                            <h3>1951 – PBSI Didirikan</h3>
                            <p>Di Indonesia, bulu tangkis mulai dikenal sejak masa penjajahan Inggris. Permainan ini kemudian mulai dimainkan secara luas oleh masyarakat dan secara bertahap menjadi populer. Seiring meningkatnya minat, mulai digelar berbagai kompetisi lokal yang mendorong semangat olahraga ini. Awalnya, bulu tangkis berada di bawah naungan Persatuan Olah Raga Indonesia (PORI), namun karena kurang fokus, pada 5 Mei 1951 didirikanlah organisasi khusus yang menaungi cabang ini, yaitu Persatuan Bulutangkis Seluruh Indonesia (PBSI). </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container section">
                <div class="row align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?= base_url('gambar/olimpiade1992.jpg') ?>" alt="Olimpiade 1992">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-box">
                            <h3>1992 – Emas Pertama di Olimpiade</h3>
                            <p>Tahun 1992 menjadi tonggak penting bagi bulu tangkis karena untuk pertama kalinya olahraga ini resmi dipertandingkan dalam ajang Olimpiade, tepatnya di Barcelona. Indonesia mencetak sejarah dengan meraih dua medali emas dari nomor tunggal putra dan tunggal putri. Alan Budikusuma dan Susi Susanti menjadi perwakilan Indonesia yang berhasil mengibarkan Merah Putih di pentas olahraga dunia. Prestasi ini menjadi kebanggaan nasional dan memperkuat posisi bulu tangkis sebagai salah satu olahraga paling berprestasi di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!--ABOUT BADMINTON QUEST START-->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5">Badminton<span class="text-primary text-uppercase">Quest</span></h1>
                        <p class="max-w-3xl mx-auto text-center mb-6">Badminton Quest adalah sebuah website yang bertujuan untuk memberikan informasi tentang GOR (Gedung Olahraga) badminton terbaik yang dapat disesuaikan dengan berbagai kebutuhan pengunjung. Website ini menyajikan berbagai detail tentang lokasi-lokasi GOR, fasilitas yang tersedia, serta kriteria lainnya yang dapat membantu pengguna dalam memilih tempat untuk bermain badminton.</p>
                        <section class="py-5 px-6 md:px-20 bg-white mb-4">

                    </div>
                </div>
            </div>
            <!--ABOUT BADMINTON QUEST START-->

            <!-- Footer Start -->

            <div id="kontak" class="container-fluid bg-dark text-light footer py-4">
                <!-- Konten tetap tengah -->
                <div class="container py-1">
                    <div class="row g-2">
                        <!-- Brand & Deskripsi -->
                        <div class="col-md-6 col-lg-4">
                            <div class="rounded p-2">
                                <h1 class="text-white text-uppercase mb-3">Badminton Quest</h1>
                                <p class="text-white">Website yang menyediakan informasi GOR badminton terbaik sesuai kebutuhanmu.</p>
                            </div>
                        </div>

                        <!-- Kontak -->
                        <div class="col-md-6 col-lg-3 ps-lg-3">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Kontak</h6>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Banda Aceh, Indonesia</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 822 7760 4916</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>badmintonQuest@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                        <!-- Navigasi -->
                        <div class="col-lg-5 col-md-12 ps-lg-4">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Navigasi</h6>
                                    <a class="btn btn-link" href="#lapangan">Daftar Lapangan</a>
                                    <a class="btn btn-link" href="#about">Tentang</a>
                                    <a class="btn btn-link" href="#kontak">Kontak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyrig-->




                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/counterup/counterup.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
            <!-- JavaScript Libraries -->
            <script src="<?= base_url('hotelier/lib/jquery/jquery.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/wow/wow.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/easing/easing.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/waypoints/waypoints.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/tempusdominus/js/moment.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
            <script src="<?= base_url('hotelier/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>

            <script>
                window.addEventListener('load', function() {
                    document.getElementById('spinner').classList.remove('show');
                });
            </script>


</body>

</html>