<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-hover align-middle " id="datatablesSimple">
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
                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFoto<?= $value['id_lokasi'] ?>" title="Lihat Foto">
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
                            <a href="<?= base_url('lokasi/detail/' . $value['id_lokasi']) ?>" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                <i class="bi bi-eye"> Lihat Detail</i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
