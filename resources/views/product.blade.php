@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="/assets/style/product.css" />
@endsection

@section('container')
<div class="product__container">
  <img
    class="product__image"
    src="./assets/images/product/01.png"
    alt=""
  />
  <div class="product__info">
    <p class="product__name">Nama Produk</p>
    <p class="product__seller">Seller</p>
    <p class="product__price">Rp. 50000</p>
    <p class="product__category">Elektronik</p>
    <p class="product__description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, modi?
      Minima libero doloremque necessitatibus! Praesentium recusandae quod
      nesciunt animi voluptatem!
    </p>
    <button class="product__button">Masukkan Keranjang</button>
    <div class="product__seller__container">
      <img
        class="product__seller__image"
        src="./assets/images/user/Anya.jpg"
        alt=""
      />
      <p class="product__seller__name">Nama Penjual</p>
      <button class="product__button">Kunjungi Profil</button>
    </div>
  </div>
</div>
@endsection
