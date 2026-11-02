## 1. Identitas
Nama: Abiyyu Rofii' Bintang Zahy
Nim: 025A00200018
Prodi: Informatika

## 2. Deskripsi Proyek
Mekarya Barbershop adalah aplikasi website profil dan katalog layanan dinamis berbasis PHP native tanpa database. Website ini menyajikan informasi lengkap profil barbershop serta daftar paket layanan perawatan rambut.

## 3. Cara Menjalankan di Localhost
Dengan menggunakan perintah php -S localhost:8000 di terminal. Kemudian akan muncul link dari program tersebut.

## 4. Daftar Fitur & Penanganan Kode
-assets/
Untuk Menyiimpan logo Mekarya Barbershop dan foto foto model layanan oitingan rambut

-screenshots/              
Tempat menyimpan screenshot untuk README

-.gitignore                
Konfigurasi Git ignore

-data.php                  
Array multidimensi 8 item data layanan

-functions.php             
Fungsi buatan sendiri & fungsi array bawaan

-index.php                 
Halaman profil usaha

-katalog.php               
Halaman katalog dinamis & statistik

-README.md                 
Dokumentasi proyek UTS

-style.css                 
Styling CSS eksternal


## 5. Daftar Fungsi Array Bawaan PHP
1.count(): Digunakan di functions.php pada fungsi hitungStatistikKatalog() untuk menghitung total seluruh paket layanan yang ada di dalam array multidimensi.
2.array_filter(): Digunakan di functions.php pada fungsi hitungStatistikKatalog() untuk memfilter dan menghitung paket layanan yang berstatus tersedia ('tersedia' => true).
3.usort(): Digunakan di functions.php pada fungsi hitungStatistikKatalog() untuk mengurutkan array data layanan berdasarkan harga dari yang terendah ke tertinggi sehingga dapat mengambil paket dengan harga termurah.


## 6. Tangkapan Layar (Screenshots)
[Tampilan Halaman Profil]
![alt text](<screenshots/Halaman Profil 1.png>)
![alt text](<screenshots/Halaman Profil 2.png>)

[Tampilan Halaman Katalog]
![alt text](<screenshots/Halaman Katalog 1.png>)
![alt text](<screenshots/Halaman Katalog 2.png>)

[Perbaikan Halaman Katalog]
![alt text](<screenshots/Perbaikan Halaman Katalog.png>)



## 7. Sumber Referensi & Catatan AI
Sumber Referensi: Pratikum 1-6

Catatan Penggunaan AI
Untuk diskusi, untuk membantu perbaikan tampilan web dan untuk melakukan pengecekan kelengkapan sesuai syarat pada file proyek UTS.