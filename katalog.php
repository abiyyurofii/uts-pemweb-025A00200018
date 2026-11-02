<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

$sort = $_GET['sort'] ?? 'default';

$stats = hitungStatistikKatalog($services);

$displayedServices = urutkanLayanan($services, $sort);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Layanan - Mekarya Barbershop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo-container">
                <img src="assets/Logo Barbershop.jpeg" alt="Logo Mekarya Barbershop" class="logo-img">
            </div>
            <h1>Mekarya Barbershop</h1>
            <p>Daftar Layanan & Paket Perawatan</p>
            <nav>
                <a href="index.php">Profil Usaha</a>
                <a href="katalog.php" class="active">Katalog Layanan</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="stats-grid">
            <div class="stat-card">
                <h3>Total Layanan</h3>
                <p><?= e((string)$stats['total_layanan']); ?> Paket</p>
            </div>
            <div class="stat-card">
                <h3>Layanan Tersedia</h3>
                <p><?= e((string)$stats['layanan_tersedia']); ?> Tersedia</p>
            </div>
            <div class="stat-card">
                <h3>Harga Termurah</h3>
                <p>
                    <?php if ($stats['termurah'] !== null): ?>
                        <?= e(formatRupiah((int)$stats['termurah']['harga'])); ?>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </p>
            </div>
        </section>

        <section class="filter-box" style="margin-bottom: 20px; text-align: right;">
            <form method="GET" action="katalog.php">
                <label for="sort" style="color: #ccc; font-weight: bold; margin-right: 8px;">Urutkan Harga:</label>
                <select name="sort" id="sort" onchange="this.form.submit()" style="padding: 6px 12px; background: #222; color: #fff; border: 1px solid #d4af37; border-radius: 4px; cursor: pointer;">
                    <option value="default" <?= $sort === 'default' ? 'selected' : ''; ?>>-- Default --</option>
                    <option value="termurah" <?= $sort === 'termurah' ? 'selected' : ''; ?>>Harga Termurah</option>
                    <option value="termahal" <?= $sort === 'termahal' ? 'selected' : ''; ?>>Harga Termahal</option>
                </select>
            </form>
        </section>

        <section class="grid-katalog">
            <?php foreach ($displayedServices as $item): ?>
                <article class="card-layanan">
                    <div>
                        <?php if ($item['populer']): ?>
                            <span class="badge badge-bestseller">★ POPULER</span>
                        <?php endif; ?>

                        <?php
                        $statusBadgeClass = match($item['tersedia']) {
                            true => 'badge-tersedia',
                            false => 'badge-tutup',
                        };
                        $statusLabel = match($item['tersedia']) {
                            true => 'Tersedia',
                            false => 'Tutup',
                        };
                        ?>
                        <span class="badge <?= e($statusBadgeClass); ?>"><?= e($statusLabel); ?></span>
                        <span class="badge badge-kategori"><?= e($item['kategori']); ?></span>

                        <h2><?= e($item['nama']); ?></h2>
                        <p class="price-tag"><?= e(formatRupiah($item['harga'])); ?></p>
                        <p><small>⏱ Durasi: <?= e((string)$item['durasi_menit']); ?> Menit</small></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= e((string)date('Y')); ?> Mekarya Barbershop. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>