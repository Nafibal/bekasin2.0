<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>product</title>

    <link rel="stylesheet" href="./assets/style/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./assets/style/product.css" />
  </head>
  <body>
    <!-- NAVIGATION -->
    <nav class="navigation">
      <div class="container">
        <img class="navigation__logo" src="./assets/logo/logo.png" alt="logo" />
        <div class="navigation__list">
          <a href="" class="navigation__link"
            ><i class="fa-solid fa-cart-shopping"></i
          ></a>
          <a href="" class="navigation__link"
            ><i class="fa-solid fa-truck"></i
          ></a>
          <a href="" class="navigation__link"
            ><i class="fa-solid fa-circle-user"></i
          ></a>
          <a href="" class="navigation__link">
            <button class="navigation__button">logout</button>
          </a>
        </div>
      </div>
    </nav>

    <div class="container">
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
    </div>
  </body>
</html>
