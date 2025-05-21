## SiPus Digital

**SiPus Digital** (Sistem Informasi Perpustakaan Digital) adalah aplikasi web yang dirancang untuk memudahkan proses pengelolaan dan peminjaman buku perpustakaan secara online. Sistem ini dibuat untuk memfasilitasi digitalisasi layanan perpustakaan, sehingga seluruh proses—mulai dari pencarian buku hingga pengembalian dapat dilakukan dengan mudah, cepat, dan mengelola koleksi buku tanpa harus datang langsung ke perpustakaan.

## Daftar Isi

- [Fitur Utama](#fitur-utama)
- [Arsitektur Sistem](#arsitektur-sistem)
- [Tampilan Antarmuka](#tampilan-antarmuka)
- [Panduan Instalasi](#panduan-instalasi)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)
- [Kontak & Dukungan](#kontak--dukungan)

## Fitur Utama

1. **Pencarian Buku:**
   - Cari buku berdasarkan judul buku atau kata kunci tertentu.
   - Filter dan urutkan hasil pencarian.
2. **Peminjaman Buku Online:**
   - Pengguna (user) dapat meminjam buku secara online tanpa perlu datang langsung ke perpustakaan.
   - Melihat status peminjaman dan riwayat transaksi.
3. **Manajemen Koleksi Buku:**
   - Admin dapat menambah, mengedit, menghapus data buku.
   - Upload sampul buku, kelola ketersediaan buku, dan kategori.
5. **Dashboard Statistik:**
   - Menampilkan statistik jumlah buku, user, transaksi peminjaman, dan pengembalian.
6. **Riwayat Peminjaman & Notifikasi:**
   - Pengguna dan admin dapat melihat riwayat peminjaman.
   - Notifikasi otomatis untuk pengingat pengembalian dan status peminjaman.
7. **Hak Akses Multi-Level:**
   - Terdapat dua peran utama: Admin dan User.
   - Setiap peran memiliki hak akses dan tampilan dashboard yang berbeda.
8. **Manajemen Kategori & Rak Buku:**
   - Kelola kategori buku dan lokasi rak untuk memudahkan penataan koleksi.
9. **Pengaturan Profil:**
   - Pengguna dapat mengedit profil dan mengganti password.
10. **Responsive Design:**
    - Tampilan website menyesuaikan dengan perangkat desktop maupun mobile.

## Arsitektur Sistem

- **Backend:** PHP (Framework Laravel 12)
- **Frontend:** Blade (Laravel 12 Template Engine), JavaScript, CSS
- **Database:** MySQL
- **Autentikasi:** Laravel Auth (bawaaan Laravel)
- **File Upload:** Laravel Storage
- **Deployment:** Dapat dijalankan di shared hosting, VPS, atau lokal

### Diagram Alur Pengguna

1. User login
2. User mencari buku → mengajukan peminjaman
3. Admin menerima permintaan peminjaman → memproses → mengubah status
4. User menerima notifikasi status peminjaman dan mendapatkan no antrian buku (PDF)
5. Admin konfirmasi terkait pengembalian buku
5. Semua aktivitas tercatat di dashboard

## Tampilan Antarmuka

- **Halaman Utama:** Landing page sederhana untuk pemanis.
- **Halaman Login:** Untuk Admin dan User login ke dashboard.

- **Dashboard Admin:** Untuk melihat statistik, jumlah antrian, jumlah buku, dan riwayat pinjaman.
- **Manajemen Buku:** Untuk Admin melihat data buku, menambahkan buku, edit, dan menghapus buku.
- **Manajemen Antrian:** Untuk Admin menyetujui dan menolak pengajuan buku User.
- **Manajemen Riwayat:** Untuk Admin melihat riwayat pinjaman dan mengkonfirmasi pengembalian buku.
- **Profile Admin:** Untuk mengedit profil dan password admin.

- **Dashboard User:** Untuk melihat jumlah antrian, buku dipinjam dan notifikasi.
- **Daftar Buku:** Untuk User mencari buku dan melakukan pinjaman buku.
- **Antrian Buku:** Untuk User melihat pengajuan disetujui atau tidak, jika disetujui dapat (PDF otomatis).
- **Riwayat Buku:** Untuk User melihat riwayat buku yang telah diajukan atau dipinjam.
- **Profile User:** Untuk mengedit profil dan password User.

## Panduan Instalasi

### Syarat Minimal

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL/MariaDB
- Web server (Apache/Nginx)

### Langkah Instalasi

1. **Clone repositori:**
   ```bash
   git clone https://github.com/tbfarhannh/sipus-digital.git
   cd sipus-digital
   ```

2. **Install dependency backend:**
   ```bash
   composer install
   ```

3. **Install dependency frontend & build asset:**
   ```bash
   npm install
   npm run dev
   ```

4. **Copy file environment:**
   ```bash
   cp .env.example .env
   ```

5. **Konfigurasi database dan email di file `.env`:**
   - Atur DB_DATABASE, DB_USERNAME, DB_PASSWORD sesuai database Anda

6. **Generate key aplikasi:**
   ```bash
   php artisan key:generate
   ```

7. **Migrasi dan seeding database:**
   ```bash
   php artisan migrate --seed
   ```

8. **Jalankan server lokal:**
   ```bash
   php artisan serve
   ```
   Akses aplikasi di [http://localhost:8000](http://localhost:8000)

### Catatan Akun Admin Default (Jika Ada Seeder)
- Username: `admin`
- Password: `password`  
*Segera ubah password setelah login pertama!*

## Kontribusi

Kontribusi sangat terbuka!  
Langkah kontribusi:
1. Fork repositori ini
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan Anda
4. Push ke branch Anda
5. Buat Pull Request ke repo utama

## Lisensi

Proyek ini menggunakan lisensi [MIT](LICENSE).

## Kontak & Dukungan

Jika ada pertanyaan, laporan bug, atau saran fitur:
- Buat [issue](https://github.com/tbfarhannh/sipus-digital/issues)
- Atau hubungi [Instagram](https://instagram.com/tbfarhannh).
