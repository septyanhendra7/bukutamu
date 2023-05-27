PROJEK HOME TEST BUKU TAMU ONLINE DENGAN LARAVEL 8 DAN BOOTSTRAP 5

# Buku Tamu

Buku Tamu adalah aplikasi sederhana untuk mencatat data tamu yang berkunjung.

## Deskripsi

Aplikasi ini dibangun menggunakan framework Laravel dan menggunakan database MySQL untuk menyimpan data tamu. Aplikasi ini memiliki fitur seperti input data tamu, melihat daftar tamu, mengedit data tamu, dan menghapus data tamu.

## Tampilan Halaman Tamu
![Halaman Tamu](public/images/halamantamu.png)


## Instalasi

Berikut adalah langkah-langkah untuk menginstal aplikasi ini di lingkungan lokal:

1. Clone repositori ini ke direktori lokal Anda:

   ```
   git clone https://github.com/septyanhendra7/bukutamu.git
   ```

2. Masuk ke direktori proyek:

   ```
   cd bukutamu
   ```

3. Install dependensi menggunakan Composer:

   ```
   composer install
   ```

4. Salin file `.env.example` menjadi `.env`:

   ```
   cp .env.example .env
   ```

5. Buat kunci aplikasi baru:

   ```
   php artisan key:generate
   ```

6. Atur koneksi database di file `.env` sesuai dengan konfigurasi MySQL lokal Anda.

7. Jalankan migrasi untuk membuat tabel database:

   ```
   php artisan migrate
   ```

8. Jalankan server lokal:

   ```
   php artisan serve
   ```

9. Akses aplikasi melalui URL [http://localhost:8000](http://localhost:8000).

## Kontribusi

Anda dapat melakukan kontribusi terhadap proyek ini dengan cara berikut:

1. Fork repositori ini.
2. Buat branch baru:

   ```
   git checkout -b fitur-baru
   ```

3. Lakukan perubahan yang diperlukan.
4. Commit perubahan Anda:

   ```
   git commit -m "Menambahkan fitur baru"
   ```

5. Push ke branch Anda:

   ```
   git push origin fitur-baru
   ```

6. Buat Pull Request di repositori utama.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).


