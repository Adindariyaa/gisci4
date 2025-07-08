<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - GOR Badminton</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" rel="stylesheet" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Dashboard Admin - GOR Badminton</h1>
        
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Total GOR -->
                <div class="bg-white shadow rounded-xl p-4">
                    <p class="text-sm text-gray-500">Total GOR</p>
                    <h4 class="text-xl font-bold"><?= $totalLokasi ?></h4>
                </div>

                <!-- Wilayah Tercover -->
                <div class="bg-white shadow rounded-xl p-4">
                    <p class="text-sm text-gray-500">Wilayah Tercover</p>
                    <h4 class="text-xl font-bold"><?= $kecamatanTercakup ?></h4>
                </div>

                <!-- Update Terakhir -->
                <div class="bg-white shadow rounded-xl p-4">
                    <p class="text-sm text-gray-500">Update Terakhir</p>
                    <h4 class="text-xl font-bold"><?= date('d-m-Y', strtotime($lastInputDate)) ?></h4>
                </div>
            </div>
        </div>


        <!-- Peta Interaktif -->
        <div class="bg-white p-4 rounded-xl shadow mb-6">
            <h2 class="text-lg font-semibold mb-4">Peta Lokasi GOR</h2>
            <div id="map" class="w-100 rounded-3" style="height: 50vh;"></div>
        </div>

        <!-- Script Leaflet -->


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
</body>

</html>