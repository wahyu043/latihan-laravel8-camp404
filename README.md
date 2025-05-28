# Laravel 8 CRUD Siswa - CAMP404

[![Laravel](https://img.shields.io/badge/Laravel-8-red)]()
[![Status](https://img.shields.io/badge/Status-Completed-brightgreen)]()

Sebuah proyek latihan CRUD (Create, Read, Update, Delete) sederhana menggunakan **Laravel 8**.  
Dibuat sebagai bagian dari pembelajaran Laravel bersama CAMP404 — dilengkapi fitur login dan hak akses berdasarkan role (`admin` dan `siswa`). Selain manajemen siswa, kini dilengkapi dengan **fitur manajemen user** oleh **super-admin**, serta autentikasi multi-role.

## 🔧 Tech Stack

- Laravel 8.x
- Bootstrap 4
- PHP 7.4+
- MySQL
- Auth (Login bawaan Laravel)
- Gate Authorization (`Gate::define()`)

## ✨ Fitur

- Login dan autentikasi pengguna
- Role-based access:
    - **Super Admin**: manajemen user (lihat, tambah, edit, hapus)
    - **Admin** bisa: lihat semua siswa, tambah, ubah, dan hapus.
    - **Siswa** hanya bisa: lihat detail dirinya sendiri.
- Validasi form
- Redirect sesuai role
- Clean UI pakai Bootstrap 4

## 🚀 Cara Menjalankan

```bash
git clone https://github.com/username/repo-ini.git
cd repo-ini

composer install
cp .env.example .env
php artisan key:generate

# Setup database di .env lalu:
php artisan migrate --seed

php artisan serve

```

Akses via browser: http://127.0.0.1:8000

| Role  | Email                                         | Password    |
| ----- | --------------------------------------------- | ----------- |
| Admin | [admin@camp404.com](mailto:admin@camp404.com) | password123 |
| Siswa | [andi@camp404.com](mailto:andi@camp404.com)   | password123 |

📄 Lisensi
Proyek ini dibuat untuk pembelajaran dan tidak memiliki lisensi komersial.
