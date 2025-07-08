<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang BadmintonQuest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <style>
        :root {
            --primary: #51B8A7;
            --secondary: #4BAA9A;
            --dark: #24524A;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Header -->
    <header class="text-white py-8 px-4 text-center shadow-md"
        style="background-image: url('<?= base_url('gambar/background_tentang.jpg') ?>'); background-size: cover; background-position: center;">
        <h1 class="text-3xl font-bold tracking-wide">SEJARAH BADMINTON</h1>
    </header>

    <section class="py-12 px-6 md:px-20 bg-white">
        <div class="md:flex md:items-center md:gap-10">
            <img src='<?= base_url('gambar/sejarah_badminton_india.jpg') ?> ' width='500px'> <br>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold mb-4 text-[color:var(--dark)]">Dari Mesir Kuno ke Olimpiade Dunia</h2>
                <p class="mb-3">Bulu tangkis sudah dimainkan sejak ribuan tahun lalu di Mesir, India, dan Tiongkok. Permainan ini kemudian diperkenalkan secara modern oleh tentara Inggris di abad ke-19 di India.</p>
                <p class="mb-3">Nama "badminton" berasal dari Badminton House di Inggris. Sejak itu, olahraga ini berkembang pesat dan menjadi salah satu cabang olahraga paling populer, khususnya di Asia dan Eropa.</p>
                <ul class="list-disc pl-5 text-sm text-gray-700">
                    <li>1992: Bulu tangkis resmi menjadi cabang Olimpiade.</li>
                    <li>Indonesia meraih emas pertama lewat Alan Budikusuma & Susi Susanti.</li>
                    <li>BWF menjadi federasi internasional resmi.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 2: Perkembangan di Indonesia -->
    <section class="py-12 px-6 md:px-20" style="background-color: var(--secondary)">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">Bulu Tangkis dan Indonesia</h2>
        <p class="max-w-3xl mx-auto text-center mb-6 text-white">Indonesia dikenal sebagai kekuatan besar bulu tangkis dunia. Melalui PBSI dan berbagai program pembinaan, banyak atlet berprestasi lahir dan mengharumkan nama bangsa.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <img src="<?= base_url('gambar/badminton_putri.jpg') ?>" class="rounded shadow">
            <img src="<?= base_url('gambar/badminton1.jpg') ?>" class="rounded shadow">
            <img src="<?= base_url('gambar/badminton_seluruh.png') ?>" class="rounded shadow">


        </div>
    </section>

    <!-- Section 3: Misi -->
    <section class="py-12 px-6 md:px-20 bg-white">
        <h2 class="text-2xl font-bold mb-6 text-center text-[color:var(--dark)]">Tentang Badminton Quest</h2>
        <p class="max-w-3xl mx-auto text-center mb-6">Badminton Quest adalah sebuah website yang bertujuan untuk memberikan informasi tentang GOR (Gedung Olahraga) badminton terbaik yang dapat disesuaikan dengan berbagai kebutuhan pengunjung. Website ini menyajikan berbagai detail tentang lokasi-lokasi GOR, fasilitas yang tersedia, serta kriteria lainnya yang dapat membantu pengguna dalam memilih tempat untuk bermain badminton.</p>
    </section>

</body>

</html>