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

        <!-- Statistik Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white p-4 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total GOR</p>
                <p class="text-2xl font-semibold">25</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow">
                <p class="text-sm text-gray-500">Wilayah Tercover</p>
                <p class="text-2xl font-semibold">15 Kecamatan</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow">
                <p class="text-sm text-gray-500">Update Terakhir</p>
                <p class="text-2xl font-semibold">21 April 2025</p>
            </div>
        </div>

        <!-- Peta Interaktif -->
        <div class="bg-white p-4 rounded-xl shadow mb-6">
            <h2 class="text-lg font-semibold mb-4">Peta Lokasi GOR</h2>
            <div id="map" class="w-full h-80 rounded-xl"></div>
        </div>

        <!-- Script Leaflet -->
        <script>
            const map = L.map('map').setView([5.5535711, 95.3147047], 13);

            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            L.marker([5.566743624699315, 95.32890307199199])
                .bindPopup("<img src='<?= base_url('gambar/Hall-Badminton-Pasha.jpg') ?> 'width='310px'> <br>" +
                    "<b>Hall Badminton PB. Pasha Jaya</b><br>" +
                    "Alamat : Komplek SPBU, Jl. Syiah Kuala Dsn Tgk Diblang, Mulia, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23123 <br>" +
                    "No Tlpn : 081360600056 <br>")
                .addTo(map); //hall badminton pasha jaya

            L.marker([5.532416678341398, 95.32728926337843]).addTo(map); //arena futsall
            L.marker([5.556226402427338, 95.31383864861193]).addTo(map); //zein badminton
            L.marker([5.5454197340577345, 95.33001773196749]).addTo(map); //JL badinton

            L.marker([5.5625052847020395, 95.3370129324634])
                .bindPopup("<img src='<?= base_url('gambar/Diaz-Sport-Centre.jpg') ?> 'width='310px'> <br>" +
                    "<b>Diaz Sport Centre</b><br>" +
                    "Alamat : Jl. Seulanga No.19, Beurawe, Kec. Kuta Alam, Kota Banda Aceh, Aceh<br>" +
                    "No Tlpn : 082375633030<br>")
                .addTo(map); //Diaz Badminton

            L.marker([5.533143023727355, 95.34225578667612]).addTo(map); //SR Badminton
            L.marker([5.541771468161815, 95.34929390251249]).addTo(map); //Andromeda Badminton
            L.marker([5.528572460070201, 95.3447877917636]).addTo(map); //Ampon Sport Center
            L.marker([5.5448042083164335, 95.31942482500507]).addTo(map); //Lapangan Neusu 
            L.marker([5.523275687963988, 95.3172790579818]).addTo(map); //hall badminton pb putra pratama
            L.marker([5.550570643054177, 95.34620399745566]).addTo(map); //MK Badminton
            L.marker([5.526863829093419, 95.33088322090941]).addTo(map); //Zero futsal Badminton
            L.marker([5.533894081113459, 95.3105720105942]).addTo(map); //Kick Off Badminton
            L.marker([5.524632506937195, 95.31504374551572]).addTo(map); //Mitra Sport Badminton
            L.marker([5.548123878575173, 95.33924673525003]).addTo(map); //GOR Budha Tzu Chi Panteriek
            L.marker([5.565732119556723, 95.34735680580212]).addTo(map); //AHK Badminton
        </script>
</body>

</html>