<?php
declare(strict_types=1);
require_once 'data.php';
require_once 'functions.php';

// Tangkap opsi sorting dari URL (default: harga_asc)
$sort = $_GET['sort'] ?? 'harga_asc';
$data_terurut = urutkanLayanan($layanan_barbershop, $sort);
$ringkasan = hitungRingkasan($layanan_barbershop);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Layanan - Barbershop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Katalog Layanan Barbershop</h1>
        <nav>
            <a href="index.php">Profil Kami</a>
            <a href="katalog.php">Katalog Layanan</a>
        </nav>
    </header>

    <main>
        <section class="container">
            <h2>Daftar Layanan</h2>
            
            <!-- Form Pengurutan (Sorting) -->
            <form method="GET" action="katalog.php">
                <label for="sort">Urutkan Berdasarkan:</label>
                <select name="sort" id="sort" onchange="this.form.submit()">
                    <option value="harga_asc" <?= $sort === 'harga_asc' ? 'selected' : '' ?>>Harga Termurah</option>
                    <option value="harga_desc" <?= $sort === 'harga_desc' ? 'selected' : '' ?>>Harga Termahal</option>
                    <option value="nama_asc" <?= $sort === 'nama_asc' ? 'selected' : '' ?>>Nama (A-Z)</option>
                </select>
            </form>

            <!-- Ringkasan Perhitungan -->
            <div class="ringkasan-box">
                <p>Total Jenis Layanan: <strong><?= $ringkasan['total_layanan'] ?></strong></p>
                <p>Rata-rata Harga: <strong><?= formatRupiah($ringkasan['rata_rata_harga']) ?></strong></p>
            </div>

            <!-- Grid Layanan -->
            <div class="card-grid">
                <?php foreach ($data_terurut as $item): ?>
                    <div class="card">
                        <h3><?= e($item['nama']) ?></h3>
                        <p>Kategori: <?= e($item['kategori']) ?></p>
                        <p>Durasi: <?= $item['durasi_menit'] ?> Menit</p>
                        <p class="harga"><?= formatRupiah($item['harga']) ?></p>
                        
                        <!-- Percabangan untuk label/badge populer -->
                        <?php if ($item['populer']): ?>
                            <span class="badge populer">Favorit</span>
                        <?php else: ?>
                            <span class="badge standar">Standar</span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Barbershop UTS Pemweb</p>
   </footer>
</body>
</html>