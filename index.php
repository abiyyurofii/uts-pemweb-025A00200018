<?php

declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Gentleman Barbershop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Gentleman Barbershop</h1>
        <p>Gaya Rambut Maskulin & Pelayanan Profesional</p>
    </header>

    <nav>
        <a href="index.php">Profil Usaha</a>
        <a href="katalog.php">Katalog Layanan</a>
    </nav>

    <main>
        <section class="hero">
            <h2>Selamat Datang di Gentleman Barbershop</h2>
            <p>Kami menyediakan layanan potong rambut dan perawatan diri khusus pria dengan standar kualitas terbaik dan tempat yang nyaman.</p>
        </section>

        <section>
            <h2>Tentang Kami</h2>
            <p>Berdiri sejak tahun 2020, Gentleman Barbershop berfokus pada kepuasan pelanggan dengan menghadirkan para kapster berpengalaman. Kami memadukan gaya potong rambut klasik dan tren modern.</p>
        </section>

        <section>
            <h2>Informasi Operasional</h2>
            <div class="info-grid">
                <div class="info-card">
                    <h3>Jam Buka</h3>
                    <p>Senin - Minggu: 09.00 - 21.00 WIB</p>
                </div>
                <div class="info-card">
                    <h3>Lokasi</h3>
                    <p>Jl. Utama No. 123, Surakarta</p>
                </div>
                <div class="info-card">
                    <h3>Kontak</h3>
                    <p>WhatsApp: 0812-3456-7890</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Gentleman Barbershop - UTS Pemrograman Web</p>
    </footer>

</body>
</html>