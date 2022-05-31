<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" href="./assets/style/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./assets/style/home.css" />
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

    <!-- CONTENT -->
    <div class="container">
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
        <!-- Single Product -->
        <a href="" class="product">
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
          </div>
        </a>
        <!-- end of single product -->
      </div>
    </div>
  </body>
</html>
