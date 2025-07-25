<!-- Bootstrap Home Page -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<header class="position-relative vh-100">
    <img src="https://media.istockphoto.com/id/1391562342/id/foto/pebulu-tangkis-taiwan-melakukan-latihan-pemanasan-di-latihan-ketahanan-lapangan-bulu-tangkis.jpg?s=1024x1024&w=is&k=20&c=uSR7xdXqvIHgNptYbwfxaf9QMVJLJW5CuihDLfBipgw="
        alt="Badminton Hero"
        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
        style="filter: brightness(70%); z-index: 1;">

    <div class="position-relative d-flex flex-column justify-content-center align-items-center text-white text-center h-100 z-2 px-3">
        <h1 class="display-3 fw-bold">GOR <br class="d-md-none"> BADMINTON</h1>
        <p class="mt-3 fs-4">Temukan GOR Terbaik Anda!!</p>
        <a href="<?= base_url('Home_user/daftar_lapangan') ?>" class="btn btn-light btn-lg mt-4 fw-semibold">
            Lihat Daftar Lapangan <span class="ms-2">➝</span>
        </a>
    </div>
</header>

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