// Mengambil data dan menghitung ringkasan[cite: 2]
$totalLayanan = count($daftarLayanan);[cite: 2]
$semuaHarga = array_column($daftarLayanan, 'harga');[cite: 2]
$rataRataHarga = array_sum($semuaHarga) / $totalLayanan;[cite: 2]

// Menjalankan sorting sederhana[cite: 2, 3]
$daftarLayanan = urutkanLayanan($daftarLayanan, 'harga_asc');