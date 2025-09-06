<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🏠 Sistem Informasi Booking Kosan

Aplikasi berbasis web untuk mempermudah proses booking kosan secara online.  
Dibangun menggunakan **Laravel 12 (PHP 8.2+)**, dengan **Filament** sebagai panel admin, dan terintegrasi dengan **Midtrans** sebagai payment gateway.

---

## ✨ Fitur Utama
- **Kelola Kosan & Kamar**  
  Tambah, ubah, dan hapus data kosan serta kamar.
- **Kelola Kota**  
  Manajemen data kota untuk lokasi kosan.
- **Kelola Kategori**  
  Pengelompokan kosan berdasarkan kategori.
- **Kelola Transaksi Booking**  
  Proses pemesanan kosan dengan sistem pembayaran online.
- **Testimonials**  
  Pengguna dapat memberikan ulasan/testimoni setelah menggunakan layanan.

---

## 🛠️ Teknologi yang Digunakan
- [Laravel 12](https://laravel.com/) - Framework PHP modern
- [PHP 8.2+](https://www.php.net/releases/8.2/en.php) - Bahasa pemrograman
- [Filament](https://filamentphp.com/) - Admin panel Laravel
- [Midtrans](https://midtrans.com/) - Payment Gateway
- [MySQL](https://www.mysql.com/) - Database

---
💳 Payment Gateway

Sistem ini menggunakan Midtrans untuk integrasi pembayaran online dan Twillio untuk notifikasi whatsapp.
Pastikan Anda sudah mengisi konfigurasi MIDTRANS di file .env:

MIDTRANS_SERVER_KEY=your_server_key
MIDTRANS_CLIENT_KEY=your_client_key
MIDTRANS_IS_PRODUCTION=false
TWILIO_SID
TWILIO_TOKEN

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
