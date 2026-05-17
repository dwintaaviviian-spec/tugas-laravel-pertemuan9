@extends('layouts.app')

@section('content')

<h2 class="mb-4">Daftar Anggota Perpustakaan</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode Anggota</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($anggota_list as $anggota)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $anggota['kode'] }}</td>
            <td>{{ $anggota['nama'] }}</td>
            <td>{{ $anggota['email'] }}</td>
            <td>
                <span class="badge bg-success">
                    {{ $anggota['status'] }}
                </span>
            </td>
            <td>
                <a href="{{ route('anggota.show', $anggota['id']) }}"
                   class="btn btn-primary btn-sm">
                   Detail
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection