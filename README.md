# Tugas Pertemuan 9 - CRUD Anggota Perpustakaan

Mini Project CRUD menggunakan PHP Native dan MySQLi untuk mengelola data anggota perpustakaan.

---

# Identitas Mahasiswa

- Nama : Dwinta Vivian Acintya Syahda
- NIM : 60324053
- Kelas : Pemrograman Web II B

---

# Deskripsi Project

Project ini dibuat untuk memenuhi tugas praktikum Pemrograman Web II tentang implementasi CRUD (Create, Read, Update, Delete) menggunakan PHP Native dan database MySQL.

Sistem ini digunakan untuk mengelola data anggota perpustakaan seperti:
- tambah anggota
- edit anggota
- hapus anggota
- pencarian data anggota
- filter data anggota
- upload foto anggota

---

# Fitur Project

## READ
- Menampilkan list anggota dalam tabel
- Pagination 10 data per halaman
- Search berdasarkan nama/email/telepon
- Filter status anggota
- Filter jenis kelamin
- Badge status aktif dan nonaktif
- Badge jenis kelamin
- Menampilkan foto anggota
- Dashboard statistik anggota

## CREATE
- Form tambah anggota
- Upload foto anggota
- Validasi email
- Validasi nomor telepon
- Validasi umur minimal 10 tahun
- Default status aktif
- Default tanggal daftar hari ini

## UPDATE
- Edit data anggota
- Update foto anggota
- Validasi data
- Menampilkan data lama pada form edit

## DELETE
- Hapus data anggota
- Konfirmasi hapus data
- Hapus foto otomatis dari folder uploads

---

# Teknologi Yang Digunakan

- PHP Native
- MySQLi
- Bootstrap 5
- HTML
- CSS
- XAMPP
- phpMyAdmin

---

# Struktur Folder

```bash
perpustakaan/
│
├── config/
│   └── database.php
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── modules/
│   └── anggota/
│       ├── index.php
│       ├── create.php
│       ├── edit.php
│       ├── delete.php
│       └── uploads/
│
├── assets/
│
└── README.md
