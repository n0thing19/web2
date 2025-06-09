# Repositori Pembelajaran Pemrograman Web (PHP)

## 📝 Deskripsi

Repositori ini arsip dari pembelajaran latihan PHP, di mana setiap folder mewakili satu topik spesifik dalam pembelajaran pemrograman web. Tujuan utama dari repositori ini adalah sebagai arsip dan catatan selama proses belajar.

## 📁 Daftar Modul Latihan

Berikut adalah rincian dari setiap folder latihan yang ada di dalam repositori ini:

-   `📁 1getpost`
    -   Berisi latihan dasar mengenai cara menerima dan mengelola data menggunakan metode `$_GET` dan `$_POST` di PHP.

-   `📁 2hellocomposer`
    -   Proyek pengenalan untuk menggunakan **Composer** sebagai dependency manager pada proyek PHP.

-   `📁 3form`
    -   Latihan mengenai cara membuat, mengirim, dan memvalidasi data dari form HTML menggunakan PHP.

-   `📁 4database`
    -   Contoh kode dan latihan untuk menghubungkan aplikasi PHP ke database **MySQL** dan melakukan operasi dasar.

## 🚀 Cara Menjalankan Latihan

Setiap folder di dalam repositori ini adalah sebuah proyek mini yang independen.

1.  **Pastikan Prasyarat Terpenuhi**
    -   Anda harus sudah menginstal [XAMPP](https://www.apachefriends.org/index.html), [Composer](https://getcomposer.org/), dan [Git](https://git-scm.com/).
    -   Pastikan server **Apache** dan **MySQL** dari XAMPP sudah berjalan.

2.  **Clone Repositori**
    -   Letakkan repositori ini di dalam folder `htdocs` XAMPP Anda.
    ```sh
    # Masuk ke direktori htdocs
    cd C:/xampp/htdocs

    # Clone repositori
    git clone https://github.com/n0thing19/web2.git
    ```

3.  **Jalankan Latihan Individual**
    -   Buka browser dan akses setiap folder latihan secara terpisah. Ganti `NAMA_REPO` dengan nama folder hasil clone.
    -   Contoh:
        -   `http://localhost/1getpost/`
        -   `http://localhost/3form/index.php`

4.  **Catatan Penting untuk Composer**
    -   Beberapa folder (seperti `2hellocomposer` dan `4database`) mungkin memiliki file `composer.json`-nya sendiri.
    -   Untuk folder tersebut, Anda perlu **masuk ke direktorinya melalui terminal** dan menjalankan perintah `composer install` terlebih dahulu sebelum mengaksesnya dari browser.
    ```sh
    # Contoh untuk folder 2hellocomposer
    cd C:/xampp/htdocs/NAMA_REPO/2hellocomposer
    composer install
    ```
    
5.  **Setup Database**
    -   Buka browser dan akses `http://localhost/phpmyadmin`.
    -   Buat database baru. Sebagai contoh, beri nama `uts_web2`.
    -   Pilih database `uts_web2` yang baru saja Anda buat.
    -   Klik tab **"Import"**.
    -   Klik **"Choose File"** dan pilih file skema database yang ada di `migrations/createuts.sql`.
    -   Klik tombol **"Go"** atau **"Kirim"** di bagian bawah untuk memulai proses import.

6.  **Konfigurasi Koneksi Database**
    -   Buka file `src/DB.php` menggunakan teks editor Anda.
    -   Sesuaikan detail koneksi (host, nama database, user, password) di dalam file tersebut agar cocok dengan pengaturan Anda.

## 👨‍💻 Lingkungan Pengembangan

Untuk pengalaman pengembangan yang optimal, disarankan untuk menggunakan **Visual Studio Code** dengan ekstensi berikut:

-   **[PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)**
    -   Menyediakan *autocompletion*, *error checking*, dan navigasi kode yang canggih untuk PHP.
