<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<div class="row">
    <div class="col-12">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan') ?>
            </div>
        <?php endif; ?>
        <!-- <table class="display " id="myTable"> -->
        <table class="table table-bordered table-hover align-middle" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama GOR</th>
                    <th>Alamat Lokasi</th>
                    <th>Coordinat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($lokasi as $key => $value) {
                    $fotoList = explode(',', $value['foto_lokasi']);
                ?>
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $value['nama_lokasi'] ?> </td>
                        <td> <?= $value['alamat_lokasi'] ?> </td>
                        <td> <?= $value['latitude'] ?>, <?= $value['longitude'] ?> </td>
                        <td>
                            <!-- Tombol untuk membuka modal -->
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalFoto<?= $value['id_lokasi'] ?>" title="Lihat Foto">
                                <i class="bi bi-images"></i>
                            </button>


                            <!-- Modal dengan carousel (BUAT DI SINI, MASIH DI DALAM FOREACH) -->
                            <div class="modal fade" id="modalFoto<?= $value['id_lokasi'] ?>" tabindex="-1" aria-labelledby="modalLabel<?= $value['id_lokasi'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel<?= $value['id_lokasi'] ?>">Foto <?= $value['nama_lokasi'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carousel<?= $value['id_lokasi'] ?>" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php foreach ($fotoList as $index => $foto) { ?>
                                                        <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                                                            <img src="<?= base_url('foto/' . trim($foto)) ?>" class="d-block w-100" style="max-height: 400px; object-fit: cover;">
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $value['id_lokasi'] ?>" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $value['id_lokasi'] ?>" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <!-- Tombol untuk membuka modal edit -->
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $value['id_lokasi'] ?>" title="Lihat Detail">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                             <a href="<?= base_url('lokasi/delete/' . $value['id_lokasi']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash3"></i></a>
                            <!-- Modal Detail/Edit/Delete -->
                            <div class="modal fade" id="modalDetail<?= $value['id_lokasi'] ?>" tabindex="-1" aria-labelledby="labelDetail<?= $value['id_lokasi'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="<?= base_url('lokasi/update/' . $value['id_lokasi']) ?>" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="labelDetail<?= $value['id_lokasi'] ?>">Detail & Edit GOR</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-2">
                                                    <label>Nama GOR</label>
                                                    <input type="text" name="nama_lokasi" class="form-control" value="<?= $value['nama_lokasi'] ?>" required>
                                                </div>
                                                <div class="mb-2">
                                                    <label>Alamat</label>
                                                    <textarea name="alamat_lokasi" class="form-control" required><?= $value['alamat_lokasi'] ?></textarea>
                                                </div>
                                                <div class="mb-2">
                                                    <label>Fasilitas</label><br>
                                                    <?php foreach (['kantin', 'toilet', 'parkir'] as $fasilitas) { ?>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="<?= $fasilitas ?>" value="1" <?= $value[$fasilitas] ? 'checked' : '' ?>>
                                                            <label class="form-check-label"><?= ucfirst($fasilitas) ?></label>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="mb-2">
                                                    <label>Jumlah Lapangan</label>
                                                    <input type="number" name="jumlah_lapangan" class="form-control" value="<?= $value['jumlah_lapangan'] ?>" required>
                                                </div>
                                                <div class="mb-2">
                                                    <label>Jam Operasional</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="time" name="jam_mulai" class="form-control" value="<?= $value['jam_mulai'] ?>">
                                                        </div>
                                                        <div class="col">
                                                            <input type="time" name="jam_selesai" class="form-control" value="<?= $value['jam_selesai'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label>Harga Sewa (per jam)</label>
                                                    <input type="text" name="harga_sewa" class="form-control" value="<?= $value['harga_sewa'] ?>" required>
                                                </div>
                                                <div class="mb-2">
                                                    <label>Kontak Pemesanan</label>
                                                    <input type="text" name="kontak_pemesanan" class="form-control" value="<?= $value['kontak_pemesanan'] ?>">
                                                </div>
                                                <div class="mb-2">
                                                    <label>Metode Pemesanan</label>
                                                    <input type="text" name="metode_pemesanan" class="form-control" value="<?= $value['metode_pemesanan'] ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                                <a href="<?= base_url('lokasi/delete/' . $value['id_lokasi']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>