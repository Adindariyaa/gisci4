<!-- HEADER DENGAN BACKGROUND -->
<header class="text-white text-center shadow-md d-flex align-items-center justify-content-center"
    style="background-image: url('<?= base_url('gambar/bg_daftarLapangan.jpg') ?>'); 
           background-size: cover; 
           background-position: center 80%; 
           height: 300px;
           position: relative;">
    <div style="position: absolute; top: 50%; transform: translateY(-50%); width: 100%;">
        <h1 class="text-3xl font-bold tracking-wide"> CARI DAFTAR LAPANGAN</h1>
        <h5>Daftar GOR Badminton terlengkap di Kota Banda Aceh dan Sekitarnya</h5>

        <!-- FORM SEARCH -->
        <form action="<?= base_url('lokasi/search') ?>" method="get" class="d-flex justify-content-center mt-4">
            <div class="input-group" style="max-width: 500px;">
                <input type="text" name="keyword" class="form-control form-control-lg" placeholder="Masukkan nama GOR atau lokasi..." required>
                <button class="btn btn-lg fw-bold text-white" style="background-color: #d4af37;" type="submit">Cari</button>
            </div>
        </form>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($lokasi as $item):
                $foto = explode(',', $item['foto_lokasi'])[0]; ?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="position-relative">
                            <img src="<?= base_url('foto/' . trim($foto)) ?>"
                                class="card-img-top"
                                alt="<?= $item['nama_lokasi'] ?>"
                                style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 bg-warning text-dark px-2 py-1 small fw-semibold">
                                Rp<?= number_format($item['harga_sewa']) ?>/Jam
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?= $item['nama_lokasi'] ?></h5>
                            <p class="card-text mb-2"><i class="fas fa-map-marker-alt me-2 text-secondary"></i><?= $item['alamat_lokasi'] ?></p>
                            <p class="card-text mb-2"><i class="fas fa-clock me-2 text-secondary"></i><?= $item['jam_mulai'] ?> - <?= $item['jam_selesai'] ?></p>
                            <p class="card-text mb-0"><i class="fas fa-phone me-2 text-secondary"></i><?= $item['kontak_pemesanan'] ?></p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="<?= base_url('Lokasi/detail/' . $item['id_lokasi']) ?>"
                                class="btn btn-success w-100 fw-semibold">
                                Lihat Detail
                            </a>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>