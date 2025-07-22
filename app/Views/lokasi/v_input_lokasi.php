<head>
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
</head>
<style>
    /* Hilangkan panah pada input type number */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
        /* Firefox */
    }
</style>

<div class="row">

    <div class="col-sm-4">
        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class = "alert alert-success">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>
        <?php $errors = session('errors'); ?>

        <?= form_open_multipart('Lokasi/insertData') ?>


        <div class="form-group">
            <label><span class="text-danger">*</span>Nama GOR </label>
            <input class="form-control" name="nama_lokasi">
            <p class="text-danger">
                <?= isset($errors['nama_lokasi']) ? validation_show_error('nama_lokasi') : '' ?>
            </p>
        </div>

        <div class="form-group">
            <label><span class="text-danger">*</span>Alamat Lokasi </label>
            <input class="form-control" name="alamat_lokasi">
            <p class="text-danger">
                <?= isset($errors['alamat_lokasi']) ? validation_show_error('alamat_lokasi') : '' ?>
            </p>
        </div>

        <div class="form-group">
            <label><span class="text-danger">*</span>Kecamatan </label>
            <select class="form-control" name="kecamatan" id="kecamatan">
                <option value="">-- Pilih Kecamatan --</option>
                <option value="Baiturrahman">Baiturrahman</option>
                <option value="Kuta Alam">Kuta Alam</option>
                <option value="Ulee Kareng">Ulee Kareng</option>
                <option value="Banda Raya">Banda Raya</option>
                <option value="Meuraxa">Meuraxa</option>
                <option value="Syiah Kuala">Syiah Kuala</option>
                <option value="Syiah Kuala">Jaya Baru</option>
                <option value="Syiah Kuala">Lueng Bata</option>
                <option value="Syiah Kuala">Kuta Raja</option>
                <option value="Syiah Kuala">Darussalam</option>
                <option value="Syiah Kuala">Baitussalam</option>
                <option value="Syiah Kuala">Ingin Jaya</option>
                <option value="Syiah Kuala">Kuta Baro</option>
                <option value="Syiah Kuala">Krueng Baronan Jaya</option>
                <option value="Syiah Kuala">Mesjid Raya</option>
                <option value="Syiah Kuala">Peukan Bada</option>
            </select>
            <p class="text-danger">
                <?= session('errors.kecamatan') ?>
            </p>
        </div>

        <div class="form-group">
            <label><span class="text-danger">*</span>Latitude </label>
            <input class="form-control" type="number" step="any" name="latitude" id="latitude">
            <p class="text-danger">
                <?= isset($errors['latitude']) ? validation_show_error('latitude') : '' ?>
            </p>
        </div>


        <div class="form-group">
            <label><span class="text-danger">*</span>Longitude</label>
            <input class="form-control" type="number" step="any" name="longitude" id="longitude">
            <p class="text-danger">
                <?= isset($errors['longitude']) ? validation_show_error('longitude') : '' ?>
            </p>
        </div>

        <div class="form-group">
            <label><span class="text-danger">*</span>Foto Lokasi </label>
            <input type="file" name="foto_lokasi" class="form-control">
            <p class="text-danger">
                <?= session('errors.foto_lokasi') ?>
            </p>
        </div>

        <label> Fasilitas Yang Tersedia</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="kantin" value="1" id="checkKantin">
            <label class="form-check-label" for="checkKantin">
                Kantin
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toilet" value="1" id="checkToilet">
            <label class="form-check-label" for="checkToilet">
                Toilet
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="parkir" value="1" id="checkParkir">
            <label class="form-check-label" for="checkParkir">
                Parkir
            </label>
        </div>

        <br>
        <br>
        <div class="form-group">
            <label><span class="text-danger">*</span>Jumlah Lapangan </label>
            <input class="form-control" type="number" name="jumlah_lapangan" autocomplete="off">
            <p class="text-danger">
                <?= isset($errors['jumlah_lapangan']) ? validation_show_error('jumlah_lapangan') : '' ?>
            </p>
        </div>

        <div class="mb-3">
            <label for="jam_operasional" class="form-label"><span class="text-danger">*</span>Jam Operasional</label>
            <div class="d-flex align-items-center gap-2">
                <input type="time" name="jam_mulai" class="form-control" style="max-width: 150px;">
                <span>-</span>
                <input type="time" name="jam_selesai" class="form-control" style="max-width: 150px;">
            </div>
            <p class="text-danger">
                <?= session('errors.harga_sewa_wk') ?>
            </p>
        </div>

        <div class="form-group">
            <label><span class="text-danger">*</span>Harga Sewa Weekday </label>
            <input class="form-control angka-harga" type="number" name="harga_sewa" type="text" placeholder="Rp" autocomplete="off" min="0">
            <p class="text-danger">
                <?= isset($errors['harga_sewa']) ? validation_show_error('harga_sewa') : '' ?>
            </p>
        </div>

        <div class="form-group">
            <label><span class="text-danger">*</span>Harga Sewa Weekend</label>
            <input class="form-control angka-harga" type="number" name="harga_sewa_wk" placeholder="Rp" autocomplete="off" min="0">
            <p class="text-danger">
                <?= session('errors.harga_sewa_wk') ?>
            </p>
        </div>

        <div class="form-group">
            <label><span class="text-danger">*</span>Kontak Pemesanan </label>
            <input class="form-control" type="tel" name="kontak_pemesanan" placeholder="WA/Telepon" autocomplete="off">
            <p class="text-danger">
                <?= isset($errors['kontak_pemesanan']) ? validation_show_error('kontak_pemesanan') : '' ?>
            </p>
        </div>

        <label><span class="text-danger">*</span>Metode Pemesanan </label>
        <select name="metode_pemesanan" class="form-select">
            <label>Kontak Pemesanan </label>
            <option value="" selected>Pilih Metode</option>
            <option value="online">Online</option>
            <option value="offline">Offline</option>
        </select>
        <p class="text-danger">
            <?= session('errors.metode_pemesanan') ?>
        </p>

        <br>
        <button type="submit" class="btn btn-primary">Simpan </button>
        <button type="reset" class="btn btn-success">Reset </button>

        <?php echo form_close() ?>

    </div>

    <div class="col-sm-8">
        <div id="map" style="width: 100%; height: 100vh;"></div>
    </div>

</div>
<script>
    const map = L.map('map').setView([5.5535711, 95.3147047], 15);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // tambah fitur
    L.Control.geocoder({
            defaultMarkGeocode: false
        })
        .on('markgeocode', function(e) {
            var bbox = e.geocode.bbox;
            var center = e.geocode.center;
            map.fitBounds(bbox);
            marker.setLatLng(center).bindPopup(e.geocode.name).openPopup();

            latInput.value = center.lat;
            lngInput.value = center.lng;
            posisi.value = center.lat + ',' + center.lng;
        })
        .addTo(map);

    //get coordinat
    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var posisi = document.querySelector("[name=posisi]");

    var curLocation = [5.5535711, 95.3147047];
    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: true,
    });

    //mengambil koordinat saat marker digeser atau dipindahkan
    marker.on('dragend', function(e) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            curLocation,
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng);
        $("#Posisi").val(position.lat + ',' + position.lng);
    });

    //mengambil koordinat saat map di klik
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);

        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
        posisi.value = lat + ',' + lng;
    });

    map.addLayer(marker);
</script>