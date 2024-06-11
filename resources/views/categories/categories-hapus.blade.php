@extends('layouts.app')

@section('title')
Hapus Category | Ryujin Admin
@endsection

@section('content')
<h3>Hapus Categories</h3>
<div class="form-login">
  <h4>Apakah Anda Yakin Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 10%; margin: 20px auto;">
    <a href={{ url('/category/destroy/' . $category->id_categories ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 10%; margin: 20px auto;">
    <a href="/category">
      No
    </a>
  </button>
</div>
@endsection
