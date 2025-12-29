# PLN MOBILE

> **Aplikasi Layanan Kelistrikan Digital**

---

## Deskripsi Proyek

**PLN Mobile** adalah aplikasi berbasis **web** yang dikembangkan untuk memfasilitasi pelanggan PLN dalam **mengakses layanan kelistrikan secara digital**. Aplikasi ini dirancang sebagai simulasi sistem layanan pelanggan PLN yang sebelumnya banyak dilakukan secara manual atau tersebar di berbagai kanal.

Melalui PLN Mobile, pelanggan dapat mengakses informasi kelistrikan secara lebih **terstruktur,efisien, dan transparan**, seperti melihat histori pemakaian listrik, mengecek token, serta mengelola data pelanggan aktif. Aplikasi ini juga menjadi media pembelajaran implementasi **alur data end-to-end**, mulai dari pengambilan data dari database, pemrosesan di backend, hingga penyajian di sisi frontend.

Proyek ini dikembangkan secara berkelompok dengan menerapkan praktik kolaborasi menggunakan GitHub dan pembagian tugas yang jelas pada setiap anggota tim.

---

## Fitur Aplikasi

### Fitur untuk Pelanggan

* Login pengguna
* Melihat dashboard pelanggan
* Melihat history pemakaian listrik
* Cek token listrik
* Menampilkan informasi pelanggan aktif

#### Fitur Sistem

* Pengambilan dan pengolahan data dari database
* Filtering data berdasarkan pengguna/pelanggan aktif
* Pengelolaan session pengguna
* Penyajian data ke view secara dinamis

 ---

## Tech Stack

Aplikasi **PLN Mobile** dikembangkan menggunakan teknologi berikut:

### Backend

* **PHP (Laravel)** : Framework utama backend
* **MySQL** : Database untuk penyimpanan data pengguna dan pemakaian listrik
* **Laravel Controller & Model** : Pengelolaan logika bisnis dan alur data

### Frontend

* **Blade Template** : Rendering tampilan
* **HTML, CSS, Bootstrap** : Antarmuka pengguna
* **JavaScript** : Interaksi dasar pada halaman

### Tools Pendukung

* **Git & GitHub** : Version control dan kolaborasi tim

* **Figma** : Perancangan UI/UX dan storyboard

* **Canva** : Media pendukung presentasi produk

---

## Cara Instalasi

**Pastikan perangkat telah memenuhi prasyarat berikut**:

* PHP >= versi yang sesuai dengan Laravel
* Composer
* MySQL
* Git
* Web server (Apache/XAMPP/Laragon)

**Langkah instalasi**:

git clone https://github.com/manzil26/pln-mobile-app.git

cd pln-mobile-app

composer install

* Konfigurasi Environment

* Salin file .env.example menjadi .env

* Sesuaikan konfigurasi database pada file .env

* Generate application key:
    php artisan key:generate
  
* Jalankan migrasi database (jika ada):
    php artisan migrate

---

## Cara Menjalankan Aplikasi

**Jalankan server Laravel dengan perintah**:

php artisan serve


**Akses aplikasi melalui browser**:

http://127.0.0.1:8000

## Struktur Folder

Struktur utama project PLN Mobile adalah sebagai berikut:

```
pln-mobile-app/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/              # Logic aplikasi dan alur data
│   │   │
│   │   ├── BantuanController.php     # Mengelola halaman dan fitur bantuan
│   │   ├── BeliTokenController.php   # Proses pembelian token listrik
│   │   ├── Controller.php            # Base controller Laravel
│   │   ├── MetodePembayaranController.php
│   │   │                             # Mengelola metode pembayaran
│   │   ├── NewsController.php        # Menampilkan artikel dan berita
│   │   ├── PelangganController.php   # Mengelola data pelanggan
│   │   ├── PenggunaController.php    # Mengelola data pengguna
│   │   ├── ProfileController.php     # Mengelola profil pengguna
│   │   ├── RiwayatController.php     # Menampilkan riwayat transaksi/pemakaian
│   │   ├── TokenController.php       # Logika cek dan pengelolaan token
│   │   ├── TukarPoinController.php   # Fitur penukaran poin
│   │   └── VoucherController.php     # Pengelolaan voucher
│   │
│   └── Middleware/                   # Middleware aplikasi
│
├── resources/
│   ├── css/                          # Styling aplikasi
│   ├── js/                           # Script JavaScript
│   │
│   └── views/                        # Blade template (UI)
│       │
│       ├── CekToken/                 # Halaman cek token
│       ├── Login/                    # Halaman login pengguna
│       ├── MasukkanToken/            # Halaman input token
│       ├── SignUp/                   # Halaman registrasi akun
│       ├── bayar-token/              # Halaman pembayaran token
│       ├── beli-token/               # Halaman pembelian token
│       ├── components/               # Komponen UI reusable
│       ├── fitur-artikel/            # Halaman artikel / berita
│       ├── fitur-tambahan/           # Fitur tambahan aplikasi
│       ├── hubungkan-ewallet/        # Integrasi e-wallet
│       ├── riwayat/                  # Halaman riwayat pemakaian/transaksi
│       ├── tukar/                    # Halaman tukar poin
│       ├── voucher/                  # Halaman voucher
│       │
│       ├── homepage.blade.php        # Halaman utama aplikasi
│       └── welcome.blade.php         # Halaman landing default Laravel
│
├── routes/
│   └── web.php                       # Routing aplikasi
│
├── public/                           # Asset publik
├── database/                         # Migrasi dan seeding database
├── config/                           # Konfigurasi aplikasi
├── .env                              # Konfigurasi environment
├── README.md                         # Dokumentasi project
```

> **Catatan:**
Fokus utama pengembangan aplikasi ini berada pada:

* **app/Http/Controllers** → logika dan alur data

* **resources/views** → tampilan antarmuka pengguna

* **routes/web.php** → penghubung antara UI dan backend

---

## Kolaborasi dan Version Control

Pengembangan aplikasi dilakukan secara kolaboratif menggunakan GitHub dengan penerapan:

* Branching untuk setiap pengembangan fitur
* Commit berkala untuk mendokumentasikan progres
* Merge ke branch utama untuk menghasilkan versi final source code

---

README ini disusun untuk membantu proses instalasi, menjalankan aplikasi, serta memahami struktur dan konsep pengembangan proyek PLN Mobile. Proyek ini diharapkan dapat menjadi contoh implementasi aplikasi layanan digital berbasis web dengan alur data yang terstruktur.
