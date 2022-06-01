@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="/assets/style/profile.css" />
@endsection

@section('container')
  <!-- LIST BARANG -->
  <div class="product__container">
    <a href="/dashboard"><button class="product__button"><i class="fa-solid fa-arrow-left"></i></button></a>
    <h1 class="product__title">List Barang</h1>
    <a href="/dashboard/products/create">
      <button class="product__button">Tambah Barang</button>
    </a>
    <table class="product__table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Kategori</th>
          <th>gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $loop->iteration }}.</td>
            <td>{{ $product->name }}</td>
            <td>Rp. {{ $product->price * 1000 }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
              <img
                class="table__image"
                src="/assets/images/product/{{ $product->image }}"
                alt="{{ $product->name }}"
              />
            </td>
            <td>
              <a class="table__button " href=""><i class="fa-solid fa-pen-to-square"></i></a>
              <form action="/dashboard/products/{{ $product->slug }}" method="post" class="inline">
                @method('delete')
                @csrf
                <button class="table__button table__button--red" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="fa-solid fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
