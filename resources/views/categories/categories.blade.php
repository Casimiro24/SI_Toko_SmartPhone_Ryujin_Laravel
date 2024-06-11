@extends('layouts.app')

@section('title')
Categories | Ryujin Admin
@endsection

@section('content')

<div class="home-content">
    <h3>Categories</h3>
    <div class="widget">
        <h3>Total Categories: {{ $total_categories }}</h3>
    </div>
    <button type="button" class="btn btn-tambah">
        <a href="/category/tambah">Tambah Data</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col" style="width: 20%">Photo</th>
                <th>Categories</th>
                <th scope="col" style="width: 15%">Price</th>
                <th scope="col" style="width: 30%">Spesifikasi</th>
                <th scope="col" style="width: 20%">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
            <tr>
                <td><img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="300px"></td>
                <td>{{ $category->nama }}</td>
                <td>Rp. {{ number_format($category->harga) }}</td>
                <td>{{ $category->deskripsi }}</td>
                <td>
                    <a class='btn-edit' href="/category/edit/{{ $category->id_categories }}">Edit</a>
                    |
                    <a class='btn-delete' href="/category/hapus/{{ $category->id_categories }}">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" align="center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
