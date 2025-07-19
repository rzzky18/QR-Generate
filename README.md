# 📱 Absensi Karyawan Berbasis QR Code & Validasi Lokasi

Sistem absensi berbasis web menggunakan Laravel + Vue.js yang memungkinkan karyawan melakukan absensi dengan cara memindai QR Code dan divalidasi berdasarkan lokasi GPS mereka.

## 🚀 Fitur Utama

- ✅ Generate QR Code unik (oleh admin)
- ✅ Tampilan responsif dan simpel

## 🛠️ Teknologi yang Digunakan

| Komponen        | Teknologi                  |
|----------------|----------------------------|
| Back-End       | Laravel 10                 |
| Front-End      | Vue.js                     |
| QR Generator   | endroid/qr-code            |
| Database       | PostgreSQL                 |

## 🧭 Alur Sistem

1. Admin generate QR Code untuk sesi absensi
2. Karyawan scan QR menggunakan kamera


## 🖼️ Tampilan

> (Tambahkan screenshot jika ada, contoh:)

- Form Generate QR    


## 📂 Instalasi & Setup

```bash
git clone https://github.com/username/qr-attendance.git
cd qr-attendance
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate
