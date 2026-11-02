<?php
declare(strict_types=1);
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Mekarya Barbershop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo-container">
                <img src="assets/Logo Barbershop.jpeg" alt="Logo Mekarya Barbershop" class="logo-img">
            </div>
            <h1>Mekarya Barbershop</h1>
            <p>Best Haircut On Request</p>
            <nav>
                <a href="index.php" class="active">Profil Usaha</a>
                <a href="katalog.php">Katalog Layanan</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="profile-card">
            <h2>Tentang Mekarya Barbershop</h2>
            <p>
                Mekarya Barbershop menyajikan pemotongan dan perawatan rambut pria terbaik. 
                Sesuai dengan motto kami <em>"Best Haircut On Request"</em>, kami siap mewujudkan gaya rambut impian Anda dengan teknik presisi tinggi dan produk berkualitas.
            </p>
        </section>

        <section class="profile-card">
            <h2>Jam Operasional & Lokasi</h2>
            <ul>
                <li><strong>Senin - Minggu:</strong> 10.00 - 22.00 WIB</li>
                <li><strong>Lokasi:</strong> Karanganyar, Jawa Tengah</li>
            </ul>
        </section>

        <section class="profile-card">
            <h2>Fasilitas Unggulan</h2>
            <ul>
                <li>Ruangan Full AC & Ruang Tunggu Modern</li>
                <li>Kapster Profesional & Berpengalaman</li>
                <li>Peralatan Steril & Higienis</li>
                <li>Free Wi-Fi</li>
            </ul>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= e((string)date('Y')); ?> Mekarya Barbershop. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>