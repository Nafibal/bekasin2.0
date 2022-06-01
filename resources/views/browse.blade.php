@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="/assets/style/browse.css" />
@endsection

@section('container')
  <form class="form" action="">
    <div class="form__input__container">
      <label class="form__label" for="sort">Sort By : </label>
      <select class="form__select" name="sort" id="sort">
        <option value="name">name</option>
        <option value="price">price</option>
      </select>
    </div>
    <div class="form__input__container">
      <label class="form__label" for="order">Order By : </label>
      <select class="form__select" name="order" id="order">
        <option value="ascending">ascending</option>
        <option value="descending">descending</option>
      </select>
    </div>
    <div class="form__input__container">
      <label class="form__label" for="category">Category : </label>
      <select class="form__select" name="category" id="category">
        <option value="all" selected>All</option>
        <option value="electronic">electronic</option>
        <option value="fashion">fashion</option>
      </select>
    </div>
    <input class="form__search" type="text" />
    <button class="form__submit" type="submit">Search</button>
  </form>

  <!-- PRODUCTS -->
  <div class="product__container">
    @foreach ($products as $product)
      <!-- Single Product -->
        <a href="/product/{{ $product->slug }}" class="product">
          <img
            class="product__image"
            src="./assets/images/product/{{ $product->image }}"
            alt="{{ $product->name }}"
          />
          <div class="product__info">
            <p class="product__name">{{ $product->name }}</p>
            <p class="product__seller">{{ $product->user->name }}</p>
            <p class="product__price">Rp. {{ $product->price * 1000}}</p>
            <p class="product__category">{{ $product->category->name }}</p>
          </div>
        </a>
    <!-- end of single product -->
    @endforeach
    
  </div>
@endsection



  