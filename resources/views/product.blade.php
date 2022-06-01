@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="/assets/style/product.css" />
@endsection

@section('container')
<div class="product__container">
  <img
    class="product__image"
    src="/assets/images/product/{{ $product->image }}"
    alt=""
  />
  <div class="product__info">
    <p class="product__name">{{ $product->name }}</p>
    <p class="product__seller">{{ $product->user->name }}</p>
    <p class="product__price">Rp. {{ $product->price *1000 }}</p>
    <p class="product__category">{{ $product->category->name }}</p>
    <p class="product__description">{{ $product->description }}</p>
    <button class="product__button">Masukkan Keranjang</button>
    <div class="product__seller__container">
      <img
        class="product__seller__image"
        src="/assets/images/user/{{ $product->user->photo }}"
        alt="asd"
      />
      <p class="product__seller__name">{{ $product->user->name }}</p>
      <button class="product__button">Kunjungi Profil</button>
    </div>
  </div>
</div>
@endsection
