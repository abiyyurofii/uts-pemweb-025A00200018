## 1. Identitas
Nama: Abiyyu Rofii' Bintang Zahy
Nim: 025A00200018
Prodi: Informatika

## 2. Deskripsi Proyek
Mekarya Barbershop adalah aplikasi website profil dan katalog layanan dinamis berbasis PHP native tanpa database. Website ini menyajikan informasi lengkap profil barbershop serta daftar paket layanan perawatan rambut.

## 3. Cara Menjalankan di Localhost
Dengan menggunakan perintah php -S localhost:8000 di terminal. Kemudian akan muncul link dari program tersebut.

## 4. Daftar Fitur & Penanganan Kode

| Fitur | File Terkait | Fungsi / Logika Penangan |
| :--- | :--- | :--- |
| Halaman Profil Barbershop | `index.php` | Menampilkan informasi usaha, jam operasional, alamat, dan kontak. |
| Katalog Layanan Dinamis | `katalog.php` | Melakukan rendering array multidimensi menggunakan perulangan `foreach`. |
| Format Mata Uang Rupiah | `functions.php` | `formatRupiah(int $nominal): string` |
| Badge Status Layanan | `functions.php` | `dapatkanBadge(bool $populer): string` (menggunakan percabangan `if` / `match`). |
| Pengurutan Layanan (Sorting) | `functions.php` | `urutkanLayanan(array $data, string $berdasarkan): array` (menggunakan `usort` & operator spaceship `<=>`). |
| Ringkasan Statistik Data | `katalog.php` | Perhitungan total item, rata-rata harga, serta item termahal dan termurah. |
| Keamanan Output HTML | `functions.php` / `katalog.php` | Penggunaan `htmlspecialchars()` / fungsi pembungkus `e()`. |


## 5. Daftar Fungsi Array Bawaan PHP
1.count(): Digunakan di functions.php pada fungsi hitungStatistikKatalog() untuk menghitung total seluruh paket layanan yang ada di dalam array multidimensi.
2.array_filter(): Digunakan di functions.php pada fungsi hitungStatistikKatalog() untuk memfilter dan menghitung paket layanan yang berstatus tersedia ('tersedia' => true).
3.usort(): Digunakan di functions.php pada fungsi hitungStatistikKatalog() untuk mengurutkan array data layanan berdasarkan harga dari yang terendah ke tertinggi sehingga dapat mengambil paket dengan harga termurah.


## 6. Tangkapan Layar (Screenshots)
[Tampilan Halaman Profil]
(assets/![alt text](<screenshots/Pasted 2026-11-01 at 4.16.54 PM.png>))

[Tampilan Halaman Katalog]
(assets/![alt text](<screenshots/Pasted 2026-11-01 at 4.17.15 PM.png>))

(assets/![alt text](<screenshots/Pasted 2026-11-01 at 4.22.26 PM.png>))


## 7. Sumber Referensi & Catatan AI
Sumber Referensi
Pratikum 

Catatan Penggunaan AI