declare(strict_types=1);

// 1. Fungsi Buatan Sendiri: Format Rupiah (Wajib Bertipe)
function formatRupiah(int $nominal): string 
{
    return 'Rp ' . number_format($nominal, 0, ',', '.');
}

// 2. Fungsi Buatan Sendiri: Status Kategori (Wajib Bertipe)
function DapatkanBadge(bool $populer): string 
{
    return $populer ? 'Best Seller' : 'Reguler';
}

// 3. Fungsi Pengurutan Data Layanan[cite: 2, 3]
function urutkanLayanan(array $data, string $berdasarkan = 'harga_asc'): array 
{
    // Menggunakan match untuk percabangan kriteria sorting
    match ($berdasarkan) {
        'harga_asc'  => usort($data, fn($a, $b) => $a['harga'] <=> $b['harga']),
        'harga_desc' => usort($data, fn($a, $b) => $b['harga'] <=> $a['harga']),
        'nama_asc'   => usort($data, fn($a, $b) => strcmp($a['nama'], $b['nama'])),
        default      => null,
    };

    return $data;
}