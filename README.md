# UTS Pemrograman Web - Website Profil & Katalog Layanan Barbershop

## 1. Identitas
* **Nama:** Abiyyu Rofii' Bintang Zahy
* **NIM:** 025A00200018
* **Kelas:** Informatika

---

## 2. Deskripsi Proyek
Proyek ini merupakan sebuah website profil dan katalog layanan barbershop dinamis berbasis PHP native tanpa mengikutsertakan framework maupun database. Website ini menyajikan informasi profil usaha Gentleman Barbershop serta katalog pilihan paket perawatan rambut dan grooming yang dilengkapi dengan ringkasan data statistik dan fitur pengurutan (sorting) harga/nama secara interaktif.

---

## 3. Cara Menjalankan di Localhost
1. Pastikan aplikasi web server lokal (**Laravel Herd** atau **XAMPP**) sudah terpasang dan berjalan di perangkat kamu.
2. Tempatkan folder proyek di dalam direktori server lokal:
   * **Laravel Herd (macOS):** `/Users/USERNAME/Herd/uts-pemweb-025A00200018`
   * **XAMPP:** `htdocs/uts-pemweb-025A00200018`
3. Buka peramban (*browser*) dan akses alamat berikut:
   * **Menggunakan Herd:** `http://uts-pemweb-025a00200018.test`
   * **Menggunakan XAMPP:** `http://localhost/uts-pemweb-025A00200018/`

---

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

---

## 5. Daftar Fungsi Array Bawaan PHP
Berikut adalah fungsi array bawaan PHP yang digunakan dalam proyek ini beserta tujuannya:

1. **`count()`**: Digunakan pada `katalog.php` untuk menghitung jumlah total item layanan yang ada di dalam array data.
2. **`array_column()`**: Digunakan pada `katalog.php` untuk mengambil seluruh nilai dari kolom `harga` pada array multidimensi.
3. **`array_sum()`**: Digunakan pada `katalog.php` untuk menjumlahkan nilai harga guna menghitung nilai rata-rata harga layanan.
4. **`usort()`**: Digunakan pada `functions.php` di dalam fungsi `urutkanLayanan()` untuk mengurutkan data layanan berdasarkan kriteria harga terendah, harga tertinggi, atau nama A-Z.

---

## 6. Tangkapan Layar (Screenshots)

![Tampilan Halaman Profil](assets/screenshots/profil.png)
*Gambar 1: Tampilan Halaman Utama (Profil Barbershop)*

![Tampilan Halaman Katalog](assets/screenshots/katalog.png)
*Gambar 2: Tampilan Halaman Katalog Layanan & Ringkasan Data*

---

## 7. Sumber Referensi & Catatan AI

### Referensi
* [PHP Official Documentation - Array Functions](https://www.php.net/manual/en/ref.array.php)
* [MDN Web Docs - HTML5 & CSS Layout](https://developer.mozilla.org/)

### Catatan Penggunaan AI
* **Bagian yang dibantu AI:** Brainstorming ide tema, pembuatan struktur draf `README.md`, penyiapan perintah Git/GitHub di terminal, dan formulasi fungsi pengurutan array berbasis `usort`.
* **Cara Pemeriksaan/Verifikasi:** Kode diperiksa secara manual, dipastikan tidak ada warning/notice saat dijalankan di server lokal PHP 8+, dan seluruh alur kode dapat dijelaskan secara mandiri untuk persiapan sesi demo UTS.