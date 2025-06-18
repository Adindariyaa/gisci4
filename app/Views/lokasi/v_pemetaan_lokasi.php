<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
    const map = L.map('map').setView([5.5535711, 95.3147047], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Pemetaan Lokasi

    <?php foreach ($lokasi as $key => $value) { ?>
    L.marker([<?= $value['latitude'] ?>, <?= $value['longitude'] ?>])
        .bindPopup(`<?= '<img src="' . base_url('foto/' . $value['foto_lokasi']) . '" width="250"><br>' .
            '<b>' . $value['nama_lokasi'] . '</b><br>' .
            'Alamat :' . $value['alamat_lokasi'] ?>`)
        .addTo(map);
<?php } ?>

</script>