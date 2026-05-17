<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| ROUTE ANGGOTA
|--------------------------------------------------------------------------
*/

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
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '082345678901',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '083456789012',
            'alamat' => 'Semarang',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '084567890123',
            'alamat' => 'Surabaya',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rizky Pratama',
            'email' => 'rizky@email.com',
            'telepon' => '085678901234',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ]
    ];

    return view('anggota.index', compact('anggota_list'));

})->name('anggota.index');


Route::get('/anggota/{id}', function ($id) {

    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '082345678901',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '083456789012',
            'alamat' => 'Semarang',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '084567890123',
            'alamat' => 'Surabaya',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rizky Pratama',
            'email' => 'rizky@email.com',
            'telepon' => '085678901234',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ]
    ];

    $anggota = collect($anggota_list)->firstWhere('id', $id);

    return view('anggota.show', compact('anggota'));

})->name('anggota.show');


/*
|--------------------------------------------------------------------------
| ROUTE KATEGORI
|--------------------------------------------------------------------------
*/

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])->name('kategori.search');