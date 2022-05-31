@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="/assets/style/profile.css" />
@endsection

@section('container')
  <!-- USER BIODATA -->
  <div class="user__container">
    <h1 class="user__title">Nama User</h1>
    <div class="user__biodata">
      <h2 class="biodata__title">Biodata</h2>
      <div class="biodata__label">
        <p class="biodata__tag">Nama</p>
        <p>: Anya</p>
      </div>
      <div class="biodata__label">
        <p class="biodata__tag">Email</p>
        <p>: ahmadtoha@gmail.com</p>
      </div>
      <div class="biodata__label">
        <p class="biodata__tag">Nomor HP</p>
        <p>: 085710481115</p>
      </div>
      <div class="biodata__label">
        <p class="biodata__tag">Alamat</p>
        <p>: Jl. asmodeus</p>
      </div>
      <img src="./assets/images/user/Anya.jpg" alt="" class="user__image" />
    </div>
  </div>

  <!-- LIST BARANG -->
  <div class="product__container">
    <h1 class="product__title">List Barang</h1>
    <button class="product__button">Tambah Barang</button>
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
        <tr>
          <td>1.</td>
          <td>Jaket</td>
          <td>Rp. 50.000</td>
          <td>Pakaian pria</td>
          <td>
            <img
              class="table__image"
              src="./assets/images/product/01.png"
              alt=""
            />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
