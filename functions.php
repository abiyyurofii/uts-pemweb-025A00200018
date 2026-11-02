<?php
declare(strict_types=1);

/**
 * Pembungkus htmlspecialchars untuk mengamankan cetakan HTML (XSS Protection)
 */
function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * 1. Fungsi Buatan Sendiri: Format Angka ke Rupiah
 */
function formatRupiah(int $nominal): string {
    return 'Rp ' . number_format($nominal, 0, ',', '.');
}

/**
 * 2. Fungsi Buatan Sendiri: Menghitung Statistik Ringkasan Katalog
 * Menggunakan Fungsi Array Bawaan: count, array_filter, dan usort
 */
function hitungStatistikKatalog(array $dataLayanan): array {
    if (empty($dataLayanan)) {
        return [
            'total_layanan' => 0,
            'layanan_tersedia' => 0,
            'termurah' => null,
        ];
    }

    $totalLayanan = count($dataLayanan);

    $layananTersedia = count(array_filter($dataLayanan, function (array $item): bool {
        return $item['tersedia'] === true;
    }));

    $dataUrut = $dataLayanan;
    usort($dataUrut, function (array $a, array $b): int {
        return $a['harga'] <=> $b['harga'];
    });
    $layananTermurah = $dataUrut[0];

    return [
        'total_layanan' => $totalLayanan,
        'layanan_tersedia' => $layananTersedia,
        'termurah' => $layananTermurah,
    ];
}

/**
 * 3. Fungsi Buatan Sendiri: Mengurutkan Layanan Berdasarkan Harga
 */
function urutkanLayanan(array $dataLayanan, string $urutan = 'default'): array {
    $hasil = $dataLayanan;

    if ($urutan === 'termurah') {
        usort($hasil, function (array $a, array $b): int {
            return $a['harga'] <=> $b['harga']; // Dari termurah ke termahal
        });
    } elseif ($urutan === 'termahal') {
        usort($hasil, function (array $a, array $b): int {
            return $b['harga'] <=> $a['harga']; // Dari termahal ke termurah
        });
    }

    return $hasil;
}