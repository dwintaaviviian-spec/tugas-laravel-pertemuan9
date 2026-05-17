
# Tugas Praktikum Pemrograman Web II

## Identitas Mahasiswa

| Keterangan | Data |
|---|---|
| Nama | Dwinta Vivian Acintya Syahda |
| NIM | 60324053 |
| Kelas | Pemrograman Web II B |

---

# Deskripsi Project

Project ini dibuat untuk memenuhi tugas Praktikum Pemrograman Web II menggunakan framework Laravel.

Project terdiri dari:
- Routing dan View Anggota Perpustakaan
- Controller Kategori Buku
- Implementasi konsep MVC
- Tampilan Bootstrap 5

---

# Tugas 1 - Routing dan View Anggota

## Fitur
- Routing halaman anggota
- Routing detail anggota
- Tabel daftar anggota
- Detail anggota
- Bootstrap 5
- Badge status anggota
- Link detail anggota

---

## Route Yang Digunakan

```php
Route::get('/anggota', function () {

    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ]
    ];

    return view('anggota.index', compact('anggota_list'));
});

Route::get('/anggota/{id}', function ($id) {

    return view('anggota.show');
});
````

---

## View Yang Dibuat

Folder:

```bash
resources/views/anggota/
```

File:

* index.blade.php
* show.blade.php

---

# Tugas 2 - Controller Kategori Buku

## Controller

Generate controller:

```bash
php artisan make:controller KategoriController
```

---

## Method Yang Dibuat

### index()

Menampilkan daftar kategori buku.

### show($id)

Menampilkan detail kategori dan daftar buku.

### search($keyword)

Menampilkan hasil pencarian kategori.

---

## Route Controller

```php
use App\Http\Controllers\KategoriController;

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/{id}', [KategoriController::class, 'show']);

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search']);
```

---

## View Kategori

Folder:

```bash
resources/views/kategori/
```

File:

* index.blade.php
* show.blade.php
* search.blade.php

---

# Teknologi Yang Digunakan

* Laravel
* PHP
* Bootstrap 5
* Blade Template
* MVC

---

# Cara Menjalankan Project

## 1. Clone Repository

```bash
git clone https://github.com/USERNAME/NAMA-REPOSITORY.git
```

---

## 2. Masuk Folder Project

```bash
cd nama-project
```

---

## 3. Install Dependency

```bash
composer install
```

---

## 4. Jalankan Server Laravel

```bash
php artisan serve
```

---

## 5. Buka Browser

```bash
http://127.0.0.1:8000
```

---

# Screenshot Project

## Halaman Daftar Anggota

Tambahkan screenshot di bawah ini:

```md
![Daftar Anggota](images/anggota-index.png)
```

---

## Halaman Detail Anggota

```md
![Detail Anggota](images/anggota-detail.png)
```

---

## Halaman Kategori Buku

```md
![Kategori Buku](images/kategori-index.png)
```

---

## Halaman Detail Kategori

```md
![Detail Kategori](images/kategori-detail.png)
```

---

## Halaman Search Kategori

```md
![Search Kategori](images/kategori-search.png)
```

---

# Cara Menambahkan Screenshot

## 1. Buat Folder

Di dalam project buat folder:

```bash
images
```

---

## 2. Masukkan Screenshot

Contoh:

* anggota-index.png
* anggota-detail.png
* kategori-index.png
* kategori-detail.png
* kategori-search.png

---

## 3. Push Lagi Ke GitHub

```bash
git add .
git commit -m "menambahkan screenshot"
git push
```

---

# Kesimpulan

Project berhasil mengimplementasikan:

* Routing Laravel
* Blade View
* Controller MVC
* Dynamic Route
* Bootstrap 5
* Sistem anggota perpustakaan
* Sistem kategori buku

```
```
