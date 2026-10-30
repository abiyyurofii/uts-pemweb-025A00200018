<?php
declare(strict_types=1);

// Fungsi pembungkus keamanan XSS
function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Fungsi buatan 1: Format Rupiah
function formatRupiah(int $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

// Fungsi buatan 2: Mengurutkan data (Sorting) berbasis usort
function urutkanLayanan(array $data, string $berdasarkan = 'harga_asc'): array {
    usort($data, function (array $a, array $b) use ($berdasarkan): int {
        if ($berdasarkan === 'harga_asc') {
            return $a['harga'] <=> $b['harga'];
        } elseif ($berdasarkan === 'harga_desc') {
            return $b['harga'] <=> $a['harga'];
        } elseif ($berdasarkan === 'nama_asc') {
            return strcmp($a['nama'], $b['nama']);
        }
        return 0;
    });
    return $data;
}

// Ringkasan hitung menggunakan fungsi array bawaan: count, array_column, array_sum
function hitungRingkasan(array $data): array {
    $totalItem = count($data);
    $semuaHarga = array_column($data, 'harga');
    $totalHarga = array_sum($semuaHarga);
    $rataRataHarga = $totalItem > 0 ? (int)($totalHarga / $totalItem) : 0;

    return [
        'total_layanan' => $totalItem,
        'rata_rata_harga' => $rataRataHarga
    ];
}

// Fungsi Pemrosesan Pesanan Online
function prosesPemesanan(array $data_post, array $daftar_layanan): ?array {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return null;
    }

    $nama_pemesan = trim($data_post['nama_pemesan'] ?? '');
    $no_hp = trim($data_post['no_hp'] ?? '');
    $id_layanan = (int)($data_post['id_layanan'] ?? 0);
    $tanggal = trim($data_post['tanggal'] ?? '');
    $jam = trim($data_post['jam'] ?? '');

    // Validasi sederhana
    if (empty($nama_pemesan) || empty($no_hp) || $id_layanan <= 0 || empty($tanggal) || empty($jam)) {
        return [
            'status' => 'error',
            'pesan' => 'Semua kolom formulir pemesanan wajib diisi!'
        ];
    }

    // Cari detail layanan berdasarkan ID
    $layanan_dipilih = null;
    foreach ($daftar_layanan as $item) {
        if ($item['id'] === $id_layanan) {
            $layanan_dipilih = $item;
            break;
        }
    }

    if (!$layanan_dipilih) {
        return [
            'status' => 'error',
            'pesan' => 'Layanan yang dipilih tidak valid!'
        ];
    }

    return [
        'status' => 'success',
        'pesan' => 'Pesanan berhasil dibuat!',
        'detail' => [
            'nama' => $nama_pemesan,
            'no_hp' => $no_hp,
            'layanan' => $layanan_dipilih['nama'],
            'harga' => $layanan_dipilih['harga'],
            'jadwal' => $tanggal . ' jam ' . $jam
        ]
    ];
}
